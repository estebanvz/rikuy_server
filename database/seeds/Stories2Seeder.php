<?php

use Illuminate\Database\Seeder;

class Stories2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('readings')->insert([
            'id' => 3,
            'link' => "https://acessaber.com.br/atividades/interpretacao-de-texto-natureza-4o-ano/",
            'language' => "português",
            'title' => "Natureza",
            'words' => 249,
            'complexity' => 1,
            'author' => 'Camila Pereira De Farias',
            'text' => "Natureza, uma palavra muito grande, que envolve tudo o que existe ao redor. É o grande cenário da vida – o que herdamos e o que já existia, mesmo sem a ação humana. A natureza está no Universo e é feita de água, de terra, de minérios, de vegetações. Ela é nossa moldura. É onde começa e termina.
            Mas o que ela representa? Onde principia? Como a paisagem espelha e reflete nosso olhar, nosso sentir, nosso pensar?
        Artistas de todos os tempos e lugares sempre perseguiam questões assim, criando suas próprias interpretações para o sentido da natureza.
            Já maduro, vivendo em sua casa em Giverny, cercada de belos e vastos jardins, Monet confessou que durante toda a sua vida teve um único desejo: “mesclar-se o mais estritamente possível com a natureza”. Foi justamente o que ele conseguiu ao pintar suas séries de ninféias ou nenúfares, tipos de plantas aquáticas.
            Monet não queria especificar as flores e folhas que retratava com precisão, mas sim propor um clima de natureza, pintando luzes e sombras, claridade e escuridão, folhagens e seus reflexos.
            Van Gogh, um dos maiores nomes da arte ocidental, confere uma energia emocional a suas telas como nenhum outro artista. Sua maneira de pintar os ciprestes é manifestada por pinceladas nervosas, retorcidas, curvas, entrelaçadas. Ciprestes são árvores verdes-escuras, cuja estrutura é composta de pequenas e numerosas agulhas. Na pintura, eles lembram chamas e parecem adquirir vida. As nuvens também se retorcem e às vezes a paisagem parece prestes
            a desabar.",
            'abstract' => "Natureza, uma palavra muito grande, que envolve tudo o que existe ao redor.",
            'topic_id' => 3,
            'level' => 1,
        ]);
        DB::table('questions')->insert([
            'id' => 11,
            'quest' => "Qual é o título do texto? ",
            'answers' => '["Natureza","Naturaleza","Nature"]',
            'answer' => 'Natureza',
            'score' => 1,
            'type' => 1,
            'reading_id' => 3
        ]);
        DB::table('questions')->insert([
            'id' => 12,
            'quest' => "Onde está a natureza, segundo o texto? ",
            'answers' => '["Terra","Universo","vegetações"]',
            'answer' => 'Universo',
            'score' => 3,
            'type' => 1,
            'reading_id' => 3
        ]);
        DB::table('questions')->insert([
            'id' => 13,
            'quest' => "O que Monet confessou, vivendo em sua casa em Giverny? ",
            'answers' => '["A natureza é bonita","O desejo dela é jogar na Natureza","O desejo dela é mesclar-se com a natureza"]',
            'answer' => 'O desejo dela é mesclar-se com a natureza',
            'score' => 4,
            'type' => 1,
            'reading_id' => 3
        ]);
        DB::table('questions')->insert([
            'id' => 14,
            'quest' => "De acordo com o texto, como é a maneira de pintar de Van Gogh? ",
            'answers' => '["Tranquilidade e paixão pelo arte","Pinceladas bem pensadas","Pinceladas retorcidas e curvas"]',
            'answer' => 'Pinceladas retorcidas e curvas',
            'score' => 2,
            'type' => 1,
            'reading_id' => 3
        ]);

        DB::table('questions')->insert([
            'id' => 15,
            'quest' => "O que são ciprestes? ",
            'answers' => '["Flores","Arbustos","Árvores"]',
            'answer' => 'Árvores',
            'score' => 3,
            'type' => 1,
            'reading_id' => 3
        ]);
        DB::table('readings')->insert([
            'id' => 4,
            'link' => "https://acessaber.com.br/atividades/interpretacao-de-texto-aconchego-aprende-uma-palavra-nova-4o-ano/",
            'language' => "português",
            'title' => "Aconchego aprende uma palavra nova",
            'words' => 263,
            'complexity' => 1,
            'author' => 'Helia Pereira',
            'text' => "Comida! - Comida! – grita a pequena filhote Aconchego toda vez que está com fome. Como neste momento.

            A mãe dela, a tucano Solar, adora os piados de aconchego, mas ela gostaria que Aconchego aprendesse outras palavras também.

            É hora do almoço e Aconchego está na cadeirinha de bebê.

            – Comida! Comida! – ela pia.

            – Você consegue dizer “sementinhas”? – pergunta Solar, mostrando para Aconchego uma colher cheia de sementes.

            – Comida! Comida! – Aconchego pia ainda mais alto.

            Solar dá algumas sementes a Aconchego. Aconchego fica calada enquanto as mastiga.

            – Comida! Comida! – Aconchego pia novamente, assim que esvazia a boca.

            – Aconchego, você poderia pelo menos dizer “por favor”? – pede Solar, não tão paciente quanto antes.

            – Pavor! Pavor! – Aconchego grita estridente. Então, ela inclina a cabeça e pia – Comida!

            – Não, não “pavor”, Aconchego, você consegue dizer “por favor”? – Solar ri, pegando mais sementes.

            Aconchego fica tão agitada que começa a bater as asinhas. Uma delas bate na colher e as sementes voam todas pelo chão.

            – Ai, Aconchego, que bagunça! – Solar suspira. Ela rapidamente varre as sementes.

            Aconchego observa tudo isso quieta. Quando ela abre a boca para dizer alguma coisa. Solar rapidamente diz:

            – Comida, por favor! Comida, por favor!

            A boca de Aconchego se fecha e ela fica observando Solar por um momento. Então, ela diz:

            – Comida, por favor! Comida, por favor!

            – Aconchego, você conseguiu! – entoa Solar, toda sentimental.

            – Comida, por favor! Comida, por favor! – pia Aconchego.

            E Solar a alimenta, com um grande sorriso.",
            'abstract' => "Aconchego vai aprender uma nova palavra, mas ...",
            'topic_id' => 3,
            'level' => 1,
        ]);
        DB::table('questions')->insert([
            'id' => 16,
            'quest' => "O que Acochengo grita toda vez? ",
            'answers' => '["Fome","Comida","ha!!!!!"]',
            'answer' => 'Comida',
            'score' => 3,
            'type' => 1,
            'reading_id' => 4
        ]);
        DB::table('questions')->insert([
            'id' => 17,
            'quest' => "O que quer a mamãe de Aconchego? ",
            'answers' => '["Comesse más","Comesse menos","Aprendesse novas palavras"]',
            'answer' => 'Universo',
            'score' => 2,
            'type' => 1,
            'reading_id' => 4
        ]);
        DB::table('questions')->insert([
            'id' => 18,
            'quest' => "O que felou Aconchego na primera tentativa?",
            'answers' => '["Semente","Peru","Pavor"]',
            'answer' => 'O desejo dela é mesclar-se com a natureza',
            'score' => 4,
            'type' => 1,
            'reading_id' => 4
        ]);
        DB::table('questions')->insert([
            'id' => 19,
            'quest' => "Aconchego consegue falar o que a mamãe quer?",
            'answers' => '["Sim","Não"]',
            'answer' => 'Sim',
            'score' => 1,
            'type' => 1,
            'reading_id' => 4
        ]);

        DB::table('questions')->insert([
            'id' => 20,
            'quest' => "O que palavra aprende aconchego?",
            'answers' => '["Sementinhas","Comida","Comida, por favor"]',
            'answer' => 'Comida, por favor"',
            'score' => 3,
            'type' => 1,
            'reading_id' => 4
        ]);
    }
}
