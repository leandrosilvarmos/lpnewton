@extends('layouts.master')

@section('content')
    <div class="banner">
        <div class="overlay"></div>
        <div class="content">

            <!-- Outros elementos do conteúdo do banner podem ser adicionados aqui -->
        </div>
    </div>

    <div class="container">



        <div class="section-info-one">
            <img src="{{ asset('images/Grupo de mascara-4.png') }}" alt="Minha Imagem 1">
            <div class="text-container">
                <h2>Quem Somos</h2>
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut finibus ante nec nisl volutpat
                    aliquam. Fusce at dui pulvinar, efficitur diam ac, fringilla libero. Aenean gravida posuere
                    ligula in pretium. Donec id eros non nisi vulputate dapibus. Donec eu malesuada dolor. Aliquam
                    risus urna, finibus in vehicula ut, sollicitudin at elit.</p>
                <button> Saiba Mais</button>
            </div>
        </div>

        <div class="section-info-two">
            <div class="text-container">
                <h2>Nossa equipe</h2>
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut finibus ante nec nisl volutpat
                    aliquam. Fusce at dui pulvinar, efficitur diam ac, fringilla libero. Aenean gravida posuere
                    ligula in pretium. Donec id eros non nisi vulputate dapibus. Donec eu malesuada dolor. Aliquam
                    risus urna, finibus in vehicula ut, sollicitudin at elit.</p>
            </div>
            <img src="{{ asset('images/Grupo de máscara 1.png') }}" alt="Minha Imagem 1">
        </div>

        <section class="spacer-section">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, asperiores esse non, ea dolores,
                    dolorem possimus dicta tempora architecto repudiandae beatae consequatur veritatis. Vero
                    suscipit deleniti illum corrupti ipsa dolorem.</p>
            </div>
            <div>
                <img src="{{ asset('images/Grupo de máscara 2.png') }}" alt="Minha Imagem">
            </div>
        </section>



        <section class="text-links-section">
            <div class="text-container">
                <h1> Fale Conosco</h1>
                <p>Quer conversar com a Health Clinic? Basta preencher o formulário abaixo e nós entraremos em
                    contato assim que possível!</p>
            </div>
            <div class="links-container">
                <a href="#"> <i class="fa fa-phone"></i>Telefone</a>
                <a href="#"> <i class="fa fa-whatsapp"></i>WhatsApp</a>
                <a href="#"> <i class="fa fa-comment"></i>Wechat</a>

            </div>
        </section>

        <section class="form-section">
            <form method="POST" action="{{ route('clientes.store') }}" name="formulario" id="formulario">
                @csrf
                <div class="input-group">
                    <input type="text" placeholder="Nome" name="nome" id="nome">
                    <input type="email" placeholder="Email" name="email" id="email">
                    <select name="assunto" id="assunto">
                        <option value="consulta">Consulta / Agendamento</option>
                        <option value="reagendar">Reagendar</option>
                        <option value="duvidas">Dúvidas</option>
                    </select>
                </div>
                <div class="textarea-group">
                    <textarea placeholder="Mensagem" name="mensagem" id="mensagem"></textarea>
                </div>
                <button class="btn btn-primary">Enviar</button>
            </form>
        </section>




    </div>

 
@endsection
