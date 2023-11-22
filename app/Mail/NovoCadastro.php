<?php

namespace App\Mail;

use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class NovoCadastro extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public function processarFormulario(Request $request)
     {
         // Lógica para validar e salvar os dados do formulário
     
         // Enviar e-mail após o sucesso do formulário
         $dadosDoCliente = [
             'nome' => $request->input('nome'),
             'email' => $request->input('email'),
         ];
     
         // Envie o e-mail usando a Mailable que você criou
         Mail::to($dadosDoCliente['email'])
             ->send(new NovoCadastro($dadosDoCliente['nome']));
     
         // Redirecione o usuário para uma página de confirmação, por exemplo
         return redirect()->route('response')->with('mensagem', 'E-mail enviado com sucesso!');
        }
    
    public $nome;

    
    public function __construct($nome)
    {
        //

        $this->nome = $nome;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Novo Cadastro',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    public function build()
    {
        return $this->subject('Bem-vindo ao Nosso Site')
                    ->view('emails.novo_cadastro');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
