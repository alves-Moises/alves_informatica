<div id="project-cards">
    <?php
        $project_list = array(
            array(
                "title" => "Sistecredito",
                "desc" => "site instituicional para uma fintech colombiana",
                "techs" => array("html5", "css3", "javascript", "php", "wordpress", "bootstrap5"),
                "url" => "https://www.sistecredito.com/"
            ),

            array(
                "title" => "Alves Informática",
                "desc" => "Meu site institucional como foco em divulgar meus serviços em diversas área de ti.",
                "techs" => array("html5", "css3", "javascript", "php", "wordpress", "bootstrap5", "sass"),
                "github" => "https://github.com/alves-Moises/alves_informatica",
                "url" => "https://alves-informatica.com"
            ),

            array(
                "title" => "GetiOxy",
                "desc" => "Aplicação voltada para saúde respiratória com foco em jovens (backend)",
                "techs" => array("React", "React native",  "Html5", "Css3", "Javascript", "Python", "Django", "FastApi", "Mysql"),
                "url" => "https://www.getinoxy.com.br/"
            ),

            array(
                "title" => "Quizz",
                "desc" => "Aplicação frontend de um quizz utilizando api do Opendb para o  TCC do curso de Frontend do SENAI",
                "techs" => array("React", "Html5", "Css", "Javascript", "Fastify", "json-server", "Vite", "Phosphor-Icons"),
                "github" => "https://github.com/alves-Moises/senai_tcc_frontend"
            ),

            array(
                "title" => "Quizz API",
                "desc" => "Aplicação backend de um quizz para o TCC do curso de Backend do senai",
                "techs" => array("Nodejs", "Fastify", "Swagger", "Mysql"),
                "github" => "https://github.com/alves-Moises/tcc_senai_backend"
            ),

            array(
                "title" => "Dias de visita",
                "desc" => "Site para visualizar os dias disponíveis para visita em penitenciárias do estado do Espírito Santo",
                "techs" => array("Html5", "Css3", "Javascript", "Jquery", "Boostrap5"),
                "url" => "https://www.diasdevisitas.com.br"
            ),

            array(
                "title" => "SIFIT",
                "desc" => "Site institucional para uma academia",
                "techs" => array("Html5", "Css3", "Javascript", "Boostrap5"),
                "github" => "https://github.com/alves-Moises/sifit"
            ),

            array(
                "title" => "Lingua do Catete",
                "desc" => "Tradutor lingua do catete",
                "techs" => array("Html5", "Css3", "Javascript"),
                "github" => "https://github.com/alves-Moises/p-gina_pesquisa_js"
            ),

            array(
                "title" => "Bot de Discord",
                "desc" => "Chatbot para discord",
                "techs" => array("Python3"),
                "github" => "https://github.com/alves-Moises/discord_bot"
            ),

            array(
                "title" => "Yatzee",
                "desc" => "Jogo de yatzee com função para multijogadores",
                "techs" => array("Python"),
                "github" => "https://github.com/alves-Moises/dados_yatzee"
            ),

            array(
                "title" => "Jogo da memória",
                "desc" => "jogo da memória, feito em python",
                "techs" => array("Python"),
                "github" => "https://github.com/alves-Moises/jogo_da_memoria"
            ),

            array(
                "title" => "Chatbot para whatsapp",
                "desc" => "Aplicaçaõ para divulgação em grupos de whatsapp",
                "techs" => array("nodejs", "express", "mysql", "Html5", "Css", "Bootstrap5", "Sass", "ejs"),
                "github" => "https://github.com/alves-Moises/chatbotSender"
            ),

            array(
                "title" => "Chatbot de boas vindas para whatsapp",
                "desc" => "Chatbot de boas vindas para novos membros de grupos de whatsapp",
                "techs" => array("Nodejs", "Wwebjs"),
                "github" => "https://github.com/alves-Moises/wpp_chatbot_welcome"
            ),

            array(
                "title" => "Bot whatsapp loc",
                "desc" => "Chatbot de whatsapp para auxiliar caminhoneiros a encontrar a localização de determinadas filiais da empresa (aviário, suino, bovino)",
                "techs" => array("Nodejs", "Wwebjs")
            ),

            array(
                "title" => "Bot wpp Barbeiro",
                "desc" => "Chatbot de whatsapp para agendamento de barbeiro",
                "techs" => array("Nodejs", "Wwebjs")

            ),


        );

        foreach($project_list as $project){
            get_template_part(
                "template-parts/dev-services/projects/card",
                null,
                $project
            );
        }

    ?>


    </div>