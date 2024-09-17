@extends('web.layouts.layout')
@section('content')
    <div class="container-fluid page-header py-5"
        style="background: url({{ asset('web_template/img/fondo.jpg') }}); background-size: cover; 
background-position: center">
        <h1 class="text-center text-white display-6">Jose Faustino Sanchez Carrión</h1>
        <ol class="breadcrumb justify-content-center mb-0 ">
            <li class="breadcrumb-item active text-white">Página Web de la A∴B∴R∴L∴S∴</li>
        </ol>
        <ol class="breadcrumb justify-content-center mb-0 ">
            <li class="breadcrumb-item active text-white">El Solitario de Sayán N° 81</li>
        </ol>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <h1 class="fw-bold mb-3">José Faustino Sánchez Carrión</h1>
                        <p class="mb-4">
                            <strong>José Faustino Sánchez Carrión</strong> (*Huamachuco, 13 de febrero de 1787 - † Lima, 2
                            de junio de 1825),
                            fue un prócer independestista peruano.
                        </p>
                    </div>
                    <div class="col-lg-6 ">
                        <img src="{{ asset('jfsc.jpeg') }}" class="img-fluid" style="width: 600px">
                    </div>
                    <div class="col-lg-6 mt-4">
                        <h4 class="mb-4"><strong>Biografía</strong></h4>
                        <div class="">
                            Nacido en Huamachuco, andino, remoto y olvidado pueblo perteneciente a la Intendencia de
                            Trujillo, hoy capital de la Provincia de Sánchez Carrión, en el Departamento de La Libertad. Sus
                            padres fueron don Agustín Sánchez Carrión y doña Teresa Rodríguez y Ledesma. Fue bautizado el 16
                            de febrero de 1787 en la Iglesia del pueblo por el cura José Carrión Bape. Cuando todavía no
                            cumplía 7 años de edad, pierde a su madre el 11 de enero de 1794; por eso su infancia fue dura y
                            triste y transcurrió en el mismo paraje serrano que lo vio nacer; como consecuencia de este
                            hecho, Sánchez Carrión, presenta un carácter bastante reservado y melancólico. El 2 de abril de
                            1802, ingreso al Real Seminario de San Carlos y San Marcelo de Trujillo. En él inicia los
                            estudios de la carrera eclesiástica, demostrando disciplina, ejemplar conducta y dedicación al
                            estudio. Desde los 15 años muestra sus cualidades para la oratoria; en la simple conversación y
                            discusión amistosa. En 1804 al concluir sus estudios religiosos decide abandonarlo y se traslada
                            a Lima para seguir la carrera de leyes, en el Convictorio de San Carlos de esa ciudad. En 1813
                            se le encarga dictar el curso de Filosofía en el Real Convictorio, hecho que suspende sus
                            estudios por un año. El 6 de noviembre de 1813, siendo colegial y maestro del Real Convictorio,
                            obtuvo el grado de bachiller y posteriormente es juramentado para ejercer la profesión de
                            Abogado. El 8 de noviembre de 1819, contrae matrimonio con doña María Josefa Antonia Dueñas. Los
                            primeros días de 1821 tomó parte principal de la independencia de Huamachuco, su tierra natal.
                            Al retornar a Lima en 1822, junto con Mariátegui editó el Bisemanario "La Abeja Republicana" y
                            "El Tribuno de la República Peruana". Tomó parte activa en la gestión por el establecimiento del
                            sistema de gobierno republicano. Frente a la idea de implantación de un gobierno monárquico.
                            Débil y enfermo se retira a Lurín. Falleciendo en la hacienda Grande de los padres del Oratorio
                            de San Felipe Neri, cuando tan sólo contaba con 38 años de edad. Sus restos fueron sepultados en
                            la iglesia de dicho pueblo.
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <h4 class="mb-4"><strong>Pensamiento del Prócer</strong></h4>
                        <div class="">
                            El centro del ideario de Sánchez Carrión fue la democracia, difunció y desarrolló sus ideas en
                            el órgano "El Tribuno de la República Peruana"; en la constitución de 1823, quien fuera su
                            principal redactor así como también en las circulares y misivas, que suscribió como secrtario y
                            Ministro General del Libertador Simón Bolivar. El Perú del entonces siglo XVIII estaba compuesta
                            por una ciudad aristocrática. El rey de España soberano en la península y también en el país
                            nuestro, ejercía poder absoluto, era único propietario de vidas y de bienes, que además
                            gobernaba en forma vitalicia; los españoles constituían la clase social privilegiada; los
                            hombres carecían de liberad: de pensamiento, de culto, de palabra, de imprenta, etc. Rebelde
                            Sánchez Carrión plantea contra la soberanía del rey, la soberanía del pueblo, contra el poder
                            absoluto, la división y autonomía de poderes: ejecutivo, legislativo y judicial, contra los
                            privilegios la igualdad para el premio y para el castigo; contra el gobierno vitalicio, el
                            gobierno a plazo fijo; contra el monopolio real de la propiedad, el derecho a la propiedad para
                            todos; contra el colonije y la opresión, la Libertad; en suma contra la sociedad aristocrática,
                            la sociedad democrática. El ideal de Sánchez Carrión esta constituído pues por los siguientes
                            principios fundamentales en la sociedad democrática: soberanía popular, división y autonomía de
                            poderes; gobierno a plazo fijo, propiedad, igualdad y libertad. Por el ideal de Sánchez Carrión
                            nuestros antepasados lucharon en Junin y Ayacucho. Inspirados por él, ideólogos y juristas
                            redactaron las constituciones del Perú. Gracias a él comprendimos el concepto de patria, rompidó
                            las cadenas y nos constituimos en nación soberana.
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <h4 class="mb-4"><strong>Obras y Cargos Desempeñados</strong></h4>
                        <div class="row">
                            <li class="mb-2">
                                <strong>Obras</strong>
                            </li>
                            <p>- Publicó "La Abeja Republicana", órgano de difusión de sus célebres cartas bajo el seudónimo
                                de "El Solitario de Sayán". -Editó "La Gaceta" y "El Tribuno de la República Peruana",
                                documentos que sustentaron el recio pensamiento del sistema republicano, que propugnó el
                                Prócer. -Creó la Universidad Nacional de Trujillo, primer Centor de Estudios del Norte del
                                Perú. Creó la corte superior de justicia de Trujillo, organismo encargado de administrar la
                                justicia de todo su ámbito. -Creó la Corte Suprema de Justicia de Lima, órgano rector de
                                administrar justicia a nivel nacional. -Redactó la primera Constitución Política del Perú en
                                el año de 1823 conjuntamente con Mariategui y otros por eso La Riva en oración fúnebre a
                                Sánchez Carrión dijo: "La Constitución Política de la República Peruana es un monumento
                                perenne a la gloria de Carrión y cada uno de los artículos que encierra es un rasgo
                                brillante de su elogio..."</p>
                        </div>
                        <div class="row mt-4">
                            <li class="mb-2">
                                <strong>Cargos</strong>
                            </li>
                            <p>- Fue Diputado por los departamentos de Puno y La Libertad. -Asesor Principal del Libertador
                                Simón Bolívar. -Catedrático del Real Conbictorio Carolino en Lima. -Jefe Civil del Ejército
                                Libertador. -Ministro Plenipotenciario de Relaciones Exteriores. -Gestor y propulsor del
                                Congreso Anfitriónico de Panamá a realizarse el 7 de diciembre de 1824, donde se reunirían
                                los gobiernos de México, Colombia, Guatemala, Argentina, Chile y Perú.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <h4 class="mb-4"><strong>Gestión Internacionalista</strong></h4>
                        <div class="">
                            Convencido Bolívar, así como Sánchez Carrión que la unión de las fuerzas militares de los
                            pueblos de América constituía factor fundamental para el logro de la independencia, así como la
                            de los gobiernos de las repúblicas de América para formar un sólido bloque federativo de
                            asistencia y defensas comunes que permitiese defenderse de posibles discrepancias internas y
                            agresiones externas. Con una autoridad que dirija la política de nuestros gobiernos y que sería
                            creada por una asamblea de plenipotenciarios de las nuevas repúblicas. Esa asamblea sería una
                            confederación que sirviese de consejo a los grandes conflictos. Para cristalizar este proyecto
                            Bolívar y Sánchez Carrión invitaron a los gobiernos de México, Perú, Chile, Guatemala y Buenos
                            Aires, teniendo como sede a Colombia. La convocatoria al congreso se hizo desde Lima dos días
                            antes de la batalla de Ayacucho el 7 de diciembre de 1824, en cuya histórica circular el
                            Ministro Sánchez Carrión expresa: "El día que nuestros Plenipotenciarios hagan el canje de sus
                            poderes se fijará en la historia diplomática de América una época inmortal". Cuando después de
                            cien siglos, la posteridad busque el origen de nuestro derecho público y recuerde los pactos que
                            consolidaron su destino, registrará con respeto los protocolos del istmo y magnificando la
                            profecía bolivariana del augusto acto de América, sentenció ¿Qué será entonces del istmo de
                            Corinto comparado con el de Panamá?. La profecía se está cumpliendo; El Ideal Bolivariano que
                            conlleva el del ilustre Ministro de Gobierno y Relaciones Exteriores, Dr. José Faustino Sánchez
                            Carrión, está conduciendo sus realizaciones en el pacto andino, Acuerdo de Cartagena, convenio
                            Andrés Bello para la Ciencia de la Educación y la Cultura: "Hipólito Unanue", para la salud;
                            "Simón Rodríguez", para la Tecnología y otras más. La genialidad de un nuevo humanismo americano
                            de Bolívar que Sánchez Carrión hizo volar por América y el Mundo, con aquella memorable
                            circular. continúa en plena vigencia.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
