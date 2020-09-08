<?php

use Illuminate\Database\Seeder;

class StoriesSeeder extends Seeder
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
            'id' => 1,
            'link' => "https://www.literatura.us/quiroga/plumas.html",
            'language' => "español",
            'title' => "EL ALMOHADÓN DE PLUMAS",
            'words' => 500,
            'complexity' => 1,
            'author' => 'Horacio Quiroga',
            'text' => "EL ALMOHADÓN DE PLUMAS -
            Su luna de miel fue un largo escalofrío. Rubia, angelical y tímida, el carácter duro de su marido heló sus soñadas niñerías de novia. Lo quería mucho, sin embargo, a veces con un ligero estremecimiento cuando volviendo de noche juntos por la calle, echaba una furtiva mirada a la alta estatura de Jordán, mudo desde hacía una hora. Él, por su parte, la amaba profundamente, sin darlo a conocer.
            Durante tres meses —se habían casado en abril— vivieron una dicha especial. Sin duda hubiera ella deseado menos severidad en ese rígido cielo de amor, más expansiva e incauta ternura; pero el impasible semblante de su marido la contenía siempre.
            La casa en que vivían influía un poco en sus estremecimientos. La blancura del patio silencioso —frisos, columnas y estatuas de mármol— producía una otoñal impresión de palacio encantado. Dentro, el brillo glacial del estuco, sin el más leve rasguño en las altas paredes, afirmaba aquella sensación de desapacible frío. Al cruzar de una pieza a otra, los pasos hallaban eco en toda la casa, como si un largo abandono hubiera sensibilizado su resonancia.
            En ese extraño nido de amor, Alicia pasó todo el otoño. No obstante, había concluido por echar un velo sobre sus antiguos sueños, y aún vivía dormida en la casa hostil, sin querer pensar en nada hasta que llegaba su marido.
            No es raro que adelgazara. Tuvo un ligero ataque de influenza que se arrastró insidiosamente días y días; Alicia no se reponía nunca. Al fin una tarde pudo salir al jardín apoyada en el brazo de él. Miraba indiferente a uno y otro lado. De pronto Jordán, con honda ternura, le pasó la mano por la cabeza, y Alicia rompió en seguida en sollozos, echándole los brazos al cuello. Lloró largamente todo su espanto callado, redoblando el llanto a la menor tentativa de caricia. Luego los sollozos fueron retardándose, y aún quedó largo rato escondida en su cuello, sin moverse ni decir una palabra.
            Fue ese el último día que Alicia estuvo levantada. Al día siguiente amaneció desvanecida. El médico de Jordán la examinó con suma atención, ordenándole calma y descanso absolutos.
            —No sé —le dijo a Jordán en la puerta de calle, con la voz todavía baja—. Tiene una gran debilidad que no me explico, y sin vómitos, nada.. . Si mañana se despierta como hoy, llámeme enseguida.
            Al otro día Alicia seguía peor. Hubo consulta. Constatóse una anemia de marcha agudísima, completamente inexplicable. Alicia no tuvo más desmayos, pero se iba visiblemente a la muerte. Todo el día el dormitorio estaba con las luces prendidas y en pleno silencio. Pasábanse horas sin oír el menor ruido. Alicia dormitaba. Jordán vivía casi en la sala, también con toda la luz encendida. Paseábase sin cesar de un extremo a otro, con incansable obstinación. La alfombra ahogaba sus pesos. A ratos entraba en el dormitorio y proseguía su mudo vaivén a lo largo de la cama, mirando a su mujer cada vez que caminaba en su dirección.
            Pronto Alicia comenzó a tener alucinaciones, confusas y flotantes al principio, y que descendieron luego a ras del suelo. La joven, con los ojos desmesuradamente abiertos, no hacía sino mirar la alfombra a uno y otro lado del respaldo de la cama. Una noche se quedó de repente mirando fijamente. Al rato abrió la boca para gritar, y sus narices y labios se perlaron de sudor.
            —¡Jordán! ¡Jordán! —clamó, rígida de espanto, sin dejar de mirar la alfombra.
            Jordán corrió al dormitorio, y al verlo aparecer Alicia dio un alarido de horror.
            —¡Soy yo, Alicia, soy yo!
            Alicia lo miró con extravió, miró la alfombra, volvió a mirarlo, y después de largo rato de estupefacta confrontación, se serenó. Sonrió y tomó entre las suyas la mano de su marido, acariciándola temblando.
            Entre sus alucinaciones más porfiadas, hubo un antropoide, apoyado en la alfombra sobre los dedos, que tenía fijos en ella los ojos.
            Los médicos volvieron inútilmente. Había allí delante de ellos una vida que se acababa, desangrándose día a día, hora a hora, sin saber absolutamente cómo. En la última consulta Alicia yacía en estupor mientras ellos la pulsaban, pasándose de uno a otro la muñeca inerte. La observaron largo rato en silencio y siguieron al comedor.
            —Pst... —se encogió de hombros desalentado su médico—. Es un caso serio... poco hay que hacer...
            —¡Sólo eso me faltaba! —resopló Jordán. Y tamborileó bruscamente sobre la mesa.
            Alicia fue extinguiéndose en su delirio de anemia, agravado de tarde, pero que remitía siempre en las primeras horas. Durante el día no avanzaba su enfermedad, pero cada mañana amanecía lívida, en síncope casi. Parecía que únicamente de noche se le fuera la vida en nuevas alas de sangre. Tenía siempre al despertar la sensación de estar desplomada en la cama con un millón de kilos encima. Desde el tercer día este hundimiento no la abandonó más. Apenas podía mover la cabeza. No quiso que le tocaran la cama, ni aún que le arreglaran el almohadón. Sus terrores crepusculares avanzaron en forma de monstruos que se arrastraban hasta la cama y trepaban dificultosamente por la colcha.
            Perdió luego el conocimiento. Los dos días finales deliró sin cesar a media voz. Las luces continuaban fúnebremente encendidas en el dormitorio y la sala. En el silencio agónico de la casa, no se oía más que el delirio monótono que salía de la cama, y el rumor ahogado de los eternos pasos de Jordán.
            Murió, por fin. La sirvienta, que entró después a deshacer la cama, sola ya, miró un rato extrañada el almohadón.
            —¡Señor! —llamó a Jordán en voz baja—. En el almohadón hay manchas que parecen de sangre.
            Jordán se acercó rápidamente Y se dobló a su vez. Efectivamente, sobre la funda, a ambos lados del hueco que había dejado la cabeza de Alicia, se veían manchitas oscuras.
            —Parecen picaduras —murmuró la sirvienta después de un rato de inmóvil observación.
            —Levántelo a la luz —le dijo Jordán.
            La sirvienta lo levantó, pero enseguida lo dejó caer, y se quedó mirando a aquél, lívida y temblando. Sin saber por qué, Jordán sintió que los cabellos se le erizaban.
            —¿Qué hay? —murmuró con la voz ronca.
            —Pesa mucho —articuló la sirvienta, sin dejar de temblar.
            Jordán lo levantó; pesaba extraordinariamente. Salieron con él, y sobre la mesa del comedor Jordán cortó funda y envoltura de un tajo. Las plumas superiores volaron, y la sirvienta dio un grito de horror con toda la boca abierta, llevándose las manos crispadas a los bandos: —sobre el fondo, entre las plumas, moviendo lentamente las patas velludas, había un animal monstruoso, una bola viviente y viscosa. Estaba tan hinchado que apenas se le pronunciaba la boca.
            Noche a noche, desde que Alicia había caído en cama, había aplicado sigilosamente su boca —su trompa, mejor dicho— a las sienes de aquélla, chupándole la sangre. La picadura era casi imperceptible. La remoción diaria del almohadón había impedido sin dada su desarrollo, pero desde que la joven no pudo moverse, la succión fue vertiginosa. En cinco días, en cinco noches, había vaciado a Alicia.
            Estos parásitos de las aves, diminutos en el medio habitual, llegan a adquirir en ciertas condiciones proporciones enormes. La sangre humana parece serles particularmente favorable, y no es raro hallarlos en los almohadones de pluma.",
            'abstract' => "Una historia de amor con un final inesperado.",
            'topic_id' => 3,
            'level' => 1,
        ]);
        DB::table('questions')->insert([
            'id' => 1,
            'quest' => "¿Cuál era el nombre de la mujer del cuento?",
            'answers' => '["Alicia","Alina","Alice"]',
            'answer' => 'Alicia',
            'score' => 3,
            'type' => 1,
            'reading_id' => 1
        ]);
        DB::table('questions')->insert([
            'id' => 2,
            'quest' => "¿Cuál era el nombre del hombre del cuento?",
            'answers' => '["Jorge","Juan","Jordán"]',
            'answer' => 'Jordán',
            'score' => 3,
            'type' => 1,
            'reading_id' => 1
        ]);
        DB::table('questions')->insert([
            'id' => 3,
            'quest' => "¿Cuál era la enfermedad del cuento?",
            'answers' => '["Gripe","Debilidad","Influenza","Parásitos"]',
            'answer' => 'Parásitos',
            'score' => 4,
            'type' => 1,
            'reading_id' => 1
        ]);
        DB::table('questions')->insert([
            'id' => 4,
            'quest' => "¿La protagonista murió?",
            'answers' => '["Sí","No"]',
            'answer' => 'Sí',
            'score' => 2,
            'type' => 1,
            'reading_id' => 1
        ]);

        DB::table('questions')->insert([
            'id' => 5,
            'quest' => "¿Cuándo la protagonista empeoraba?",
            'answers' => '["Durante el día","Después de comer","En las noches"]',
            'answer' => 'En las noches',
            'score' => 3,
            'type' => 1,
            'reading_id' => 1
        ]);
        DB::table('readings')->insert([
            'id' => 2,
            'language' => 'español',
            'link' => 'http://www.elalmanaque.com/navidad/cuentos_archivos/wilde.htm',
            'title' => 'el gigante egoísta',
            'words' => 500,
            'complexity' => 1,
            'author' => "Oscar Wilde",
            'text' => "Todas las tardes, a la salida de la escuela, los niños se habían acostumbrado a ir a jugar al jardín del gigante. Era un jardín grande y hermoso, cubierto de verde y suave césped. Dispersas sobre la hierba brillaban bellas flores como estrellas, y había una docena de melocotones que, en primavera, se cubrían de delicados capullos rosados, y en otoño daban sabroso fruto.

            Los pájaros se posaban en los árboles y cantaban tan deliciosamente que los niños interrumpían sus juegos para escucharlos.

            -¡Qué felices somos aquí!- se gritaban unos a otros.

            Un día el gigante regresó. Había ido a visitar a su amigo, el ogro de Cornualles, y permaneció con él durante siete años. Transcurridos los siete años, había dicho todo lo que tenía que decir, pues su conversación era limitada, y decidió volver a su castillo. Al llegar vio a los niños jugando en el jardín.

            -¿Qué estáis haciendo aquí?- les gritó con voz agria. Y los niños salieron corriendo.

            -Mi jardín es mi jardín- dijo el gigante. -Ya es hora de que lo entendáis, y no voy a permitir que nadie mas que yo juegue en él.

            Entonces construyó un alto muro alrededor y puso este cartel:
            Prohibida la entrada.
            Los transgresores serán
            procesados judicialmente.

            Era un gigante muy egoísta.

            Los pobres niños no tenían ahora donde jugar.

            Trataron de hacerlo en la carretera, pero la carretera estaba llena de polvo y agudas piedras, y no les gustó.

            Se acostumbraron a vagar, una vez terminadas sus lecciones, alrededor del alto muro, para hablar del hermoso jardín que había al otro lado.

            -¡Que felices éramos allí!- se decían unos a otros.

            Entonces llegó la primavera y todo el país se llenó de capullos y pajaritos. Solo en el jardín del gigante egoísta continuaba el invierno.

            Los pájaros no se preocupaban de cantar en él desde que no había niños, y los árboles se olvidaban de florecer. Solo una bonita flor levantó su cabeza entre el césped, pero cuando vio el cartel se entristeció tanto, pensando en los niños, que se dejó caer otra vez en tierra y se echó a dormir.

            Los únicos complacidos eran la Nieve y el Hielo.

            -La primavera se ha olvidado de este jardín- gritaban. -Podremos vivir aquí durante todo el año

            La Nieve cubrió todo el césped con su manto blanco y el Hielo pintó de plata todos los árboles. Entonces invitaron al viento del Norte a pasar una temporada con ellos, y el Viento aceptó.

            Llegó envuelto en pieles y aullaba todo el día por el jardín, derribando los capuchones de la chimeneas.

            -Este es un sitio delicioso- decía. -Tendremos que invitar al Granizo a visitarnos.

            Y llegó el Granizo. Cada día durante tres horas tocaba el tambor sobre el tejado del castillo, hasta que rompió la mayoría de las pizarras, y entonces se puso a dar vueltas alrededor del jardín corriendo lo más veloz que pudo. Vestía de gris y su aliento era como el hielo.

            -No puedo comprender como la primavera tarda tanto en llegar- decía el gigante egoísta, al asomarse a la ventana y ver su jardín blanco y frío. -¡Espero que este tiempo cambiará!

            Pero la primavera no llegó, y el verano tampoco. El otoño dio dorados frutos a todos los jardines, pero al jardín del gigante no le dio ninguno.

            -Es demasiado egoísta- se dijo.

            Así pues, siempre era invierno en casa del gigante, y el Viento del Norte, el Hielo, el Granizo y la Nieve danzaban entre los árboles.

            Una mañana el gigante yacía despierto en su cama, cuando oyó una música deliciosa. Sonaba tan dulcemente en sus oídos que creyó sería el rey de los músicos que pasaba por allí. En realidad solo era un jilguerillo que cantaba ante su ventana, pero hacía tanto tiempo que no oía cantar un pájaro en su jardín, que le pareció la música más bella del mundo. Entonces el Granizo dejó de bailar sobre su cabeza, el Viento del Norte dejó de rugir, y un delicado perfume llegó hasta él, a través de la ventana abierta.

            -Creo que, por fin, ha llegado la primavera- dijo el gigante; y saltando de la cama miró el exterior. ¿Qué es lo que vio?

            Vio un espectáculo maravilloso. Por una brecha abierta en el muro los niños habían penetrado en el jardín, habían subido a los árboles y estaban sentados en sus ramas. En todos los árboles que estaban al alcance de su vista, había un niño. Y los árboles se sentían tan dichosos de volver a tener consigo a los niños, que se habían cubierto de capullos y agitaban suavemente sus brazos sobre las cabezas de los pequeños.

            Los pájaros revoloteaban y parloteaban con deleite, y las flores reían irguiendo sus cabezas sobre el césped. Era una escena encantadora. Sólo en un rincón continuaba siendo invierno. Era el rincón más apartado del jardín, y allí se encontraba un niño muy pequeño. Tan pequeño era, no podía alcanzar las ramas del árbol, y daba vueltas a su alrededor llorando amargamente. El pobre árbol seguía aún cubierto de hielo y nieve, y el Viento del Norte soplaba y rugía en torno a él.

            -¡Sube, pequeño!- decía el árbol, y le tendía sus ramas tan bajo como podía; pero el niño era demasiado pequeño. El corazón del gigante se enterneció al contemplar ese espectáculo.

            -¡Qué egoísta he sido- se dijo. -Ahora comprendo por qué la primavera no ha venido hasta aquí. Voy a colocar al pobre pequeño sobre la copa del árbol, derribaré el muro y mi jardín será el parque de recreo de los niños para siempre.

            Estaba verdaderamente apenado por lo que había hecho.

            Se precipitó escaleras abajo, abrió la puerta principal con toda suavidad y salió al jardín.

            Pero los niños quedaron tan asustados cuando lo vieron, que huyeron corriendo, y en el jardín volvió a ser invierno.

            Sólo el niño pequeño no corrió, pues sus ojos estaban tan llenos de lágrimas, que no vio acercarse al gigante. Y el gigante se deslizó por su espalda, lo cogió cariñosamente en su mano y lo colocó sobre el árbol. El árbol floreció inmediatamente, los pájaros fueron a cantar en él, y el niño extendió sus bracitos, rodeó con ellos el cuello del gigante y le besó.

            Cuando los otros niños vieron que el gigante ya no era malo, volvieron corriendo y la primavera volvió con ellos.

            -Desde ahora, este es vuestro jardín, queridos niños- dijo el gigante, y cogiendo una gran hacha derribó el muro. Y cuando al mediodía pasó la gente, yendo al mercado, encontraron al gigante jugando con los niños en el más hermoso de los jardines que jamás habían visto.

            Durante todo el día estuvieron jugando y al atardecer fueron a despedirse del gigante.

            -Pero, ¿dónde está vuestro pequeño compañero, el niño que subí al árbol?- preguntó.

            El gigante era a este al que más quería, porque lo había besado.

            -No sabemos contestaron los niños- se ha marchado.

            -Debéis decirle que venga mañana sin falta- dijo el gigante.

            Pero los niños dijeron que no sabían donde vivía y nunca antes lo habían visto. El gigante se quedó muy triste.

            Todas las tardes, cuando terminaba la escuela, los niños iban y jugaban con el gigante. Pero al niño pequeño, que tanto quería el gigante, no se le volvió a ver. El gigante era muy bondadoso con todos los niños pero echaba de menos a su primer amiguito y a menudo hablaba de él.

            -¡Cuánto me gustaría verlo!- solía decir.

            Los años transcurrieron y el gigante envejeció mucho y cada vez estaba más débil. Ya no podía tomar parte en los juegos; sentado en un gran sillón veía jugar a los niños y admiraba su jardín.

            -Tengo muchas flores hermosas- decía, pero los niños son las flores más bellas.

             Una mañana invernal miró por la ventana, mientras se estaba vistiendo. Ya no detestaba el invierno, pues sabía que no es sino la primavera adormecida y el reposo de las flores.

            De pronto se frotó los ojos atónito y miró y remiró. Verdaderamente era una visión maravillosa. En el más alejado rincón del jardín había un árbol completamente cubierto de hermosos capullos blancos. Sus ramas eran doradas, frutos de plata colgaban de ellas y debajo, de pie, estaba el pequeño al que tanto quiso.

            El gigante corrió escaleras abajo con gran alegría y salió al jardín. Corrió precipitadamente por el césped y llegó cerca del niño. Cuando estuvo junto a él, su cara enrojeció de cólera y exclamó:

            - ¿Quién se atrevió a herirte?- Pues en las palmas de sus manos se veían las señales de dos clavos, y las mismas señales se veían en los piececitos.

            -¿Quién se ha atrevido a herirte?- gritó el gigante. -Dímelo para que pueda coger mi espada y matarle.

            -No- replicó el niño, pues estas son las heridas del amor.

            -¿Quién eres?- dijo el gigante; y un extraño temor lo invadió, haciéndole caer de rodillas ante el pequeño.

            Y el niño sonrió al gigante y le dijo:

            -Una vez me dejaste jugar en tu jardín, hoy vendrás conmigo a mi jardín, que es el Paraíso.

            Y cuando llegaron los niños aquella tarde, encontraron al gigante tendido, muerto, bajo el árbol, todo cubierto de capullos blancos.",
            'abstract' => "Un abreve historia de un gigante y su jardín.",
            'topic_id' => 3,
            'level' => 1,
        ]);

        DB::table('questions')->insert([
            'id' => 6,
            'quest' => "¿Dónde estaba el gigante al principio del cuento?",
            'answers' => '["durmiendo","visitando a un amigo","jugando con los niños" ]',
            'answer' => 'visitando a un amigo',
            'score' => 3,
            'type' => 1,
            'reading_id' => 2
        ]);
        DB::table('questions')->insert([
            'id' => 7,
            'quest' => "¿Al final el gigante jugaba con lo niños?",
            'answers' => '["Sí","No"]',
            'answer' => 'No',
            'score' => 3,
            'type' => 1,
            'reading_id' => 2
        ]);
        DB::table('questions')->insert([
            'id' => 8,
            'quest' => "¿Por qué se enojó el gigante al final?",
            'answers' => '["el niño tenia heridas en las manos","los niños destruyeron su jardín","le invierno no acababa"]',
            'answer' => 'el niño tenia heridas en las manos',
            'score' => 3,
            'type' => 1,
            'reading_id' => 2
        ]);
        DB::table('questions')->insert([
            'id' => 9,
            'quest' => "¿Qué hacian los niños cuando el gigante puso una pared?",
            'answers' => '["vagaban","jugaban en sus casas","jugaban en otro jardin"]',
            'answer' => 'vagaban',
            'score' => 3,
            'type' => 1,
            'reading_id' => 2
        ]);
        DB::table('questions')->insert([
            'id' => 10,
            'quest' => "¿Quíen destruyo la pared del jardín?",
            'answers' => '["la gente del pueblo","los árboles","el gigante con un hacha","el gigante con una patada"]',
            'answer' => 'el gigante con un hacha',
            'score' => 3,
            'type' => 1,
            'reading_id' => 2
        ]);
    }
}
