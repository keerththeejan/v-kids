<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ZipArchive;


class DownloadController extends Controller
{
    public function downloadPDF(Request $request)
    {
        // Get the selected PDF file names from the request
    $selectedData = $request->input('selectedData');

    // Check if any files are selected
    if (!empty($selectedData)) {
        // Create a new zip archive
        $zipFileName = 'selected_pdfs.zip';
        $zip = new ZipArchive;
        $zip->open(storage_path('app/' . $zipFileName), ZipArchive::CREATE | ZipArchive::OVERWRITE);

        // Loop through each selected PDF file and add it to the zip archive
        foreach ($selectedData as $fileName) {
            // Check if the file exists in the pdfs folder
            if (Storage::exists('pdfs/' . $fileName)) {
                $fileContents = Storage::get('pdfs/' . $fileName);
                $zip->addFromString($fileName, $fileContents);
            }
        }

        $zip->close();

        // Download the zip file
        return response()->download(storage_path('app/' . $zipFileName))->deleteFileAfterSend(true);
    } else {
        // Handle case where no files are selected
        return response()->json(['error' => 'No files selected'], 400);
    }
    }

    
}
