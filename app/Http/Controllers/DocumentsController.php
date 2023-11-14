<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Jobs\ProcessDocumentImport;
use App\Models\Documents;

class DocumentsController extends Controller
{
    public function upload(Request $request)
    {
        
        //valida entrada de arquivos para tipo json 
        $file = $request->file('doc');
        if ($file->isValid() && $file->getClientMimeType() === 'application/json') {
            $content = $file->get();

            //decodifica arquivo Json para array
            $json = json_decode($content, true);

            $validator = Validator::make($json, [
                'documentos' => 'required|array',
            ]);

            //verifica se foi recebido um array
            if ($validator->fails()) {
                return redirect('/')
                    ->withErrors($validator)
                    ->withInput();
            }

            //insere dados recebidos em banco de dados
            foreach ($json['documentos'] as $documento) {
            
                if ($documento['categoria'] == "Remessa Parcial") {
                    $categoria = 1; 
                }
    
                if ($documento['categoria'] == "Remessa") {
                    $categoria = 2; 
                }
    
                $titulo = $documento['titulo'];
                $conteudo = $documento['conteúdo']; 
    
                
                $document = new Documents();
                $document->category_id =  $categoria;
                $document->title = $titulo;
                $document->contents = $conteudo;
    
                
                $document->save();
            }

            return redirect('/')->with('message', 'Fila processada com sucesso!');
        }

        return redirect('/')->withErrors(['doc' => 'O arquivo precisa ser um JSON válido']);
    }

}
