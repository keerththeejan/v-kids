<?php

// app/Http/Controllers/PdfDocumentController.php

namespace App\Http\Controllers;

use App\Models\package;
use Illuminate\Http\Request;
use App\Models\PdfDocument;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use ZipArchive;

class PdfDocumentController extends Controller
{
    public function index($id)
    {
        $documents = $data = DB::table('pdf_documents')
            ->where('pdf_documents.studentid', $id)
            ->get();
        return view('students.fileview', compact('documents'));
    }


    public function downloadSelectedDocuments(Request $request)
    {
        $documentIds = $request->document_ids;
        $selectedDocuments = PdfDocument::whereIn('id', $documentIds)->get();

        if ($selectedDocuments->isEmpty()) {
            return response()->json(['error' => 'No documents selected'], 400);
        }

        $zip = new ZipArchive;
        $zipFileName = 'selected_documents.zip';
        if ($zip->open(public_path($zipFileName), ZipArchive::CREATE) === TRUE) {
            foreach ($selectedDocuments as $document) {
                $filePath = public_path('uploads/' . $document->path);
                if (file_exists($filePath)) {
                    $zip->addFile($filePath, $document->title . '.pdf');
                } else {
                    return response()->json(['error' => 'File not found: ' . $document->path], 404);
                }
            }
            $zip->close();
            return response()->download(public_path($zipFileName))->deleteFileAfterSend(true);
        } else {
            return response()->json(['error' => 'Failed to create zip file'], 500);
        }
    }


    public function getStudentDocuments(Request $request)
    {
        $studentId = $request->sid;
        $documents = PdfDocument::where('student_id', $studentId)->get();

        return response()->json($documents);
    }


    public function create()
    {
        $students = Student::pluck('fullname', 'id');
        $packages = Package::pluck('name', 'id'); // Assuming the model name is Package
        $data = DB::table('packages as p')
            ->join('pdf_documents as ps', 'p.id', '=', 'ps.packageid')
            ->join('students as s', 's.id', '=', 'ps.studentid')
            ->select('p.name', 'ps.path')
            ->where('ps.studentid', 15)
            ->get();
        return view('students.file', compact('students', 'packages', 'data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sid' => 'required',
            'title' => 'required',
            'pdf' => 'required|mimes:pdf',
        ]);

        $customFileName = $request->input('sid') . $request->input('title') . ".pdf";
        $pdfPath = $request->file('pdf')->storeAs('pdfs', $customFileName);


        PdfDocument::create([
            'studentid' => $request->input('sid'),
            'packageid' => $request->input('title'),
            'title' => $request->input('sid') . $request->input('title'),
            'path' =>  $pdfPath,
        ]);

        return redirect('document');
    }

    public function show($id)
    {
        $document = PdfDocument::find($id);
        return view('pdf.show', compact('document'));
    }

    public function edit($id)
    {
        $document = PdfDocument::find($id);
        return view('pdf.edit', compact('document'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $document = PdfDocument::find($id);
        $document->title = $request->input('title');
        $document->save();

        return redirect()->route('pdf-documents.index')->with('success', 'PDF document updated successfully');
    }

    public function destroy($id)
    {
        $document = PdfDocument::find($id);
        $document->delete();
        return redirect()->route('pdf-documents.index')->with('success', 'PDF document deleted successfully');
    }
}
