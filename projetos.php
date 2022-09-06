<!--
    Projetos, deve mostrar projetos já realizados pela empresa,
    tanto projetos em 3D quanto em construções reais.
-->

<?php 
include('head.php');
include('menu.php')
?>
<center>
    <p class="titulo">PROJETOS</p>
</center>
<body>
    <section>
    <div class="container ">
        <p class='projTexto'>
            <br>
            Atendemos nossos clientes de forma personalizada, 
            criando e trazendo soluções na área da engenharia,
            arquitetura e construção, para transformar ideias
            e sonhos em realidade, garantindo a qualidade que
            o cliente sonha e nos solicita.    
            <br><br>
            Desenvolvemos os projetos buscando estilo contemporâneo,
            inovador e funcional, planejando sua obra ou reforma do
            começo ao fim.
            <br><br>
            Conheça alguns dos nossos projetos abaixo: 
        </p>    
    </div>

    
        <div class="container">
            <div class="row">

                <div class="column">
                    <img onclick="abrirModal1()" src="./imagens/casa 1/img 2.jpg" alt="">
                    <img onclick="abrirModal2()" src="./imagens/casa 2/img 1.jpg" alt="">
                    <img onclick="abrirModal3()" src="./imagens/casa 3/img 2.jpg" alt="">
                    <img onclick="abrirModal4()" src="./imagens/casa 4/img 1.jpg" alt="">
                </div>

                <div class="column">
                    <img onclick="abrirModal5()" src="./imagens/casa 5/img 1.jpg" alt="">
                    <img onclick="abrirModal6()" src="./imagens/casa 6/img 1.jpg" alt="">
                    <img onclick="abrirModal7()" src="./imagens/casa 7/img 2.jpg" alt="">
                    <img onclick="abrirModal8()" src="./imagens/casa 8/img 5.jpg" alt="">
                </div>

                <div class="column">
                    <img onclick="abrirModal9()" src="./imagens/casa 9/img 1.jpg" alt="">
                    <img onclick="abrirModal10()" src="./imagens/casa 10/img 1.jpg" alt="">
                    <img onclick="abrirModal11()" src="./imagens/casa 11/img 1.1.jpg" alt="">
                    <img onclick="abrirModal12()" src="./imagens/casa 12/img 1.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="bg-fundo"  id="mod">
            <p class="fechar" onclick="fechaModal()"></p>

            <img class="prev" id="drecrementar" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um">
                    <img src="./imagens/casa 1/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois">
                    <img  src="./imagens/casa 1/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres">
                    <img  src="./imagens/casa 1/img 3.jpg" alt="">
                </div>
                <div class="quatro" id="quatro">
                    <img  src="./imagens/casa 1/img 4.jpg" alt="">
                </div>
                <div class="cinco"  id="cinco">
                    <img  src="./imagens/casa 1/img 5.jpg" alt="">
                </div>
                <div class="seis"   id="seis">
                    <img src="./imagens/casa 1/img 6.jpg" alt="">
                </div>
            </div>

            <img class="next" id="incrementar" src="./icones/seta_direita.png" alt="">
        </div>
        <script>
            function abrirModal1(){
                document.getElementById('mod').classList.add('aparecer')
                document.getElementById('um').classList.add('aparecer')
            }
            const botn = document.getElementById('incrementar')
            const butn = document.getElementById('drecrementar')
            let contador = 1;
            botn.addEventListener('click', function(){
            contador++;                   
            if(contador===1){
                    document.getElementById('dois').classList.remove('aparecer')
                    document.getElementById('um').classList.add('aparecer')
                } else if(contador===2){
                    document.getElementById('um').classList.remove('aparecer')
                    document.getElementById('tres').classList.remove('aparecer')
                    document.getElementById('dois').classList.add('aparecer')
                    } else if(contador===3){
                        document.getElementById('dois').classList.remove('aparecer')
                        document.getElementById('quatro').classList.remove('aparecer')
                        document.getElementById('tres').classList.add('aparecer')
                        } else if(contador===4){
                            document.getElementById('tres').classList.remove('aparecer')
                            document.getElementById('cinco').classList.remove('aparecer')
                            document.getElementById('quatro').classList.add('aparecer')
                            }else if(contador===5){
                                document.getElementById('quatro').classList.remove('aparecer')
                                document.getElementById('seis').classList.remove('aparecer')
                                document.getElementById('cinco').classList.add('aparecer')
                                }else if(contador>=6){
                                    document.getElementById('cinco').classList.remove('aparecer')
                                    document.getElementById('seis').classList.add('aparecer')
                                    contador = 6;}
                                })
            butn.addEventListener('click', function(){
            contador= contador - 1;               
            if(contador<=1){
                    document.getElementById('um').classList.add('aparecer')
                    document.getElementById('dois').classList.remove('aparecer')
                    contador=1;
                } else if(contador===2){
                    document.getElementById('dois').classList.add('aparecer')
                    document.getElementById('tres').classList.remove('aparecer')
                    } else if(contador===3){
                        document.getElementById('quatro').classList.remove('aparecer')
                        document.getElementById('tres').classList.add('aparecer')
                        } else if(contador===4){
                            document.getElementById('cinco').classList.remove('aparecer')
                            document.getElementById('quatro').classList.add('aparecer')
                            }else if(contador===5){
                                document.getElementById('seis').classList.remove('aparecer')
                                document.getElementById('cinco').classList.add('aparecer')
                                }else if(contador===6){
                                    document.getElementById('seis').classList.add('aparecer')
                                   }
                                })
            function fechaModal(){
                document.getElementById('mod').classList.remove('aparecer')
                document.getElementById('um').classList.remove('aparecer')
                document.getElementById('dois').classList.remove('aparecer')
                document.getElementById('tres').classList.remove('aparecer')
                document.getElementById('quatro').classList.remove('aparecer')
                document.getElementById('cinco').classList.remove('aparecer')
                document.getElementById('seis').classList.remove('aparecer')
                contador= 1;
            }
        </script>

        <div class="bg-fundo"  id="mod2">
            <p class="fechar" onclick="fechaModal2()"></p>

            <img class="prev" id="drecrementar2" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um2">
                    <img src="./imagens/casa 2/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois2">
                    <img  src="./imagens/casa 2/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres2">
                    <img  src="./imagens/casa 2/img 3.jpg" alt="">
                </div>
                <div class="quatro" id="quatro2">
                    <img  src="./imagens/casa 2/img 4.jpg" alt="">
                </div>
                <div class="cinco"  id="cinco2">
                    <img  src="./imagens/casa 2/img 5.jpg" alt="">
                </div>
            </div>

            <img class="next" id="incrementar2" src="./icones/seta_direita.png" alt="">
        </div>

        <script>
            function abrirModal2(){
                document.getElementById('mod2').classList.add('aparecer')
                document.getElementById('um2').classList.add('aparecer')
            }
            const botn2 = document.getElementById('incrementar2')
            const butn2 = document.getElementById('drecrementar2')
            let contador2 = 1;
            botn2.addEventListener('click', function(){
            contador2++;                   
            if(contador2===1){
                    document.getElementById('dois2').classList.remove('aparecer')
                    document.getElementById('um2').classList.add('aparecer')
                } else if(contador2===2){
                    document.getElementById('um2').classList.remove('aparecer')
                    document.getElementById('tres2').classList.remove('aparecer')
                    document.getElementById('dois2').classList.add('aparecer')
                    } else if(contador2===3){
                        document.getElementById('dois2').classList.remove('aparecer')
                        document.getElementById('quatro2').classList.remove('aparecer')
                        document.getElementById('tres2').classList.add('aparecer')
                        } else if(contador2===4){
                            document.getElementById('tres2').classList.remove('aparecer')
                            document.getElementById('cinco2').classList.remove('aparecer')
                            document.getElementById('quatro2').classList.add('aparecer')
                            }else if(contador2>=5){
                                document.getElementById('quatro2').classList.remove('aparecer')
                                document.getElementById('cinco2').classList.add('aparecer')
                                contador2 = 5;}
                                })
            butn2.addEventListener('click', function(){
            contador2= contador2 - 1;               
            if(contador2<=1){
                    document.getElementById('um2').classList.add('aparecer')
                    document.getElementById('dois2').classList.remove('aparecer')
                    contador2=1;
                } else if(contador2===2){
                    document.getElementById('dois2').classList.add('aparecer')
                    document.getElementById('tres2').classList.remove('aparecer')
                    } else if(contador2===3){
                        document.getElementById('quatro2').classList.remove('aparecer')
                        document.getElementById('tres2').classList.add('aparecer')
                        } else if(contador2===4){
                            document.getElementById('cinco2').classList.remove('aparecer')
                            document.getElementById('quatro2').classList.add('aparecer')
                            }else if(contador2===5){
                                document.getElementById('cinco2').classList.add('aparecer')}
                                })
            function fechaModal2(){
                document.getElementById('mod2').classList.remove('aparecer')
                document.getElementById('um2').classList.remove('aparecer')
                document.getElementById('dois2').classList.remove('aparecer')
                document.getElementById('tres2').classList.remove('aparecer')
                document.getElementById('quatro2').classList.remove('aparecer')
                document.getElementById('cinco2').classList.remove('aparecer')
                contador2= 1;
            }
        </script>

        <div class="bg-fundo"  id="mod3">
            <p class="fechar" onclick="fechaModal3()"></p>

            <img class="prev" id="drecrementar3" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um3">
                    <img src="./imagens/casa 3/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois3">
                    <img  src="./imagens/casa 3/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres3">
                    <img  src="./imagens/casa 3/img 3.jpg" alt="">
                </div>
                <div class="quatro" id="quatro3">
                    <img  src="./imagens/casa 3/img 4.jpg" alt="">
                </div>
            </div>
            <img class="next" id="incrementar3" src="./icones/seta_direita.png" alt="">
        </div>

        <script>
            function abrirModal3(){
                document.getElementById('mod3').classList.add('aparecer')
                document.getElementById('um3').classList.add('aparecer')
            }
            const botn3 = document.getElementById('incrementar3')
            const butn3 = document.getElementById('drecrementar3')
            let contador3 = 1;
            botn3.addEventListener('click', function(){
            contador3++;                   
            if(contador3===1){
                    document.getElementById('dois3').classList.remove('aparecer')
                    document.getElementById('um3').classList.add('aparecer')
                } else if(contador3===2){
                    document.getElementById('um3').classList.remove('aparecer')
                    document.getElementById('tres3').classList.remove('aparecer')
                    document.getElementById('dois3').classList.add('aparecer')
                    } else if(contador3===3){
                        document.getElementById('dois3').classList.remove('aparecer')
                        document.getElementById('quatro3').classList.remove('aparecer')
                        document.getElementById('tres3').classList.add('aparecer')
                        } else if(contador3>=4){
                            document.getElementById('tres3').classList.remove('aparecer')
                            document.getElementById('quatro3').classList.add('aparecer')
                            contador3 = 4}
                                })
            butn3.addEventListener('click', function(){
            contador3= contador3 - 1;               
            if(contador3<=1){
                    document.getElementById('um3').classList.add('aparecer')
                    document.getElementById('dois3').classList.remove('aparecer')
                    contador3=1;
                } else if(contador3===2){
                    document.getElementById('dois3').classList.add('aparecer')
                    document.getElementById('tres3').classList.remove('aparecer')
                    } else if(contador3===3){
                        document.getElementById('quatro3').classList.remove('aparecer')
                        document.getElementById('tres3').classList.add('aparecer')
                        } else if(contador3===4){
                            document.getElementById('quatro3').classList.add('aparecer')}
                            })
            function fechaModal3(){
                document.getElementById('mod3').classList.remove('aparecer')
                document.getElementById('um3').classList.remove('aparecer')
                document.getElementById('dois3').classList.remove('aparecer')
                document.getElementById('tres3').classList.remove('aparecer')
                document.getElementById('quatro3').classList.remove('aparecer')
                contador3= 1;
            }
        </script>


        <div class="bg-fundo"  id="mod4">
            <p class="fechar" onclick="fechaModal4()"></p>

            <img class="prev" id="drecrementar4" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um4">
                    <img src="./imagens/casa 4/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois4">
                    <img  src="./imagens/casa 4/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres4">
                    <img  src="./imagens/casa 4/img 3.jpg" alt="">
                </div>
                <div class="quatro" id="quatro4">
                    <img  src="./imagens/casa 4/img 4.jpg" alt="">
                </div>
                <div class="cinco"  id="cinco4">
                    <img  src="./imagens/casa 4/img 5.jpg" alt="">
                </div>
            </div>

            <img class="next" id="incrementar4" src="./icones/seta_direita.png" alt="">
        </div>

        <script>
            function abrirModal4(){
                document.getElementById('mod4').classList.add('aparecer')
                document.getElementById('um4').classList.add('aparecer')
            }
            const botn4 = document.getElementById('incrementar4')
            const butn4 = document.getElementById('drecrementar4')
            let contador4 = 1;
            botn4.addEventListener('click', function(){
            contador4++;                   
            if(contador4===1){
                    document.getElementById('dois4').classList.remove('aparecer')
                    document.getElementById('um4').classList.add('aparecer')
                } else if(contador4===2){
                    document.getElementById('um4').classList.remove('aparecer')
                    document.getElementById('tres4').classList.remove('aparecer')
                    document.getElementById('dois4').classList.add('aparecer')
                    } else if(contador4===3){
                        document.getElementById('dois4').classList.remove('aparecer')
                        document.getElementById('quatro4').classList.remove('aparecer')
                        document.getElementById('tres4').classList.add('aparecer')
                        } else if(contador4===4){
                            document.getElementById('tres4').classList.remove('aparecer')
                            document.getElementById('cinco4').classList.remove('aparecer')
                            document.getElementById('quatro4').classList.add('aparecer')
                            }else if(contador4>=5){
                                document.getElementById('quatro4').classList.remove('aparecer')
                                document.getElementById('cinco4').classList.add('aparecer')
                                contador4 = 5;}
                                })
            butn4.addEventListener('click', function(){
            contador4= contador4 - 1;               
            if(contador4<=1){
                    document.getElementById('um4').classList.add('aparecer')
                    document.getElementById('dois4').classList.remove('aparecer')
                    contador4=1;
                } else if(contador4===2){
                    document.getElementById('dois4').classList.add('aparecer')
                    document.getElementById('tres4').classList.remove('aparecer')
                    } else if(contador4===3){
                        document.getElementById('quatro4').classList.remove('aparecer')
                        document.getElementById('tres4').classList.add('aparecer')
                        } else if(contador4===4){
                            document.getElementById('cinco4').classList.remove('aparecer')
                            document.getElementById('quatro4').classList.add('aparecer')
                            }else if(contador4===5){
                                document.getElementById('cinco4').classList.add('aparecer')}
                                })
            function fechaModal4(){
                document.getElementById('mod4').classList.remove('aparecer')
                document.getElementById('um4').classList.remove('aparecer')
                document.getElementById('dois4').classList.remove('aparecer')
                document.getElementById('tres4').classList.remove('aparecer')
                document.getElementById('quatro4').classList.remove('aparecer')
                document.getElementById('cinco4').classList.remove('aparecer')
                contador4= 1;
            }
        </script>


        <div class="bg-fundo"  id="mod5">
            <p class="fechar" onclick="fechaModal5()"></p>

            <img class="prev" id="drecrementar5" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um5">
                    <img src="./imagens/casa 5/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois5">
                    <img  src="./imagens/casa 5/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres5">
                    <img  src="./imagens/casa 5/img 3.jpg" alt="">
                </div>
                <div class="quatro" id="quatro5">
                    <img  src="./imagens/casa 5/img 4.jpg" alt="">
                </div>
                <div class="cinco"  id="cinco5">
                    <img  src="./imagens/casa 5/img 5.jpg" alt="">
                </div>
                <div class="seis"  id="seis5">
                    <img  src="./imagens/casa 5/img 6.jpg" alt="">
                </div>
            </div>

            <img class="next" id="incrementar5" src="./icones/seta_direita.png" alt="">
        </div>

        <script>
            function abrirModal5(){
                document.getElementById('mod5').classList.add('aparecer')
                document.getElementById('um5').classList.add('aparecer')
            }
            const botn5 = document.getElementById('incrementar5')
            const butn5 = document.getElementById('drecrementar5')
            let contador5 = 1;
            botn5.addEventListener('click', function(){
            contador5++;                   
            if(contador5===1){
                    document.getElementById('dois5').classList.remove('aparecer')
                    document.getElementById('um5').classList.add('aparecer')
                } else if(contador5===2){
                    document.getElementById('um5').classList.remove('aparecer')
                    document.getElementById('tres5').classList.remove('aparecer')
                    document.getElementById('dois5').classList.add('aparecer')
                    } else if(contador5===3){
                        document.getElementById('dois5').classList.remove('aparecer')
                        document.getElementById('quatro5').classList.remove('aparecer')
                        document.getElementById('tres5').classList.add('aparecer')
                        } else if(contador5===4){
                            document.getElementById('tres5').classList.remove('aparecer')
                            document.getElementById('cinco5').classList.remove('aparecer')
                            document.getElementById('quatro5').classList.add('aparecer')
                            }else if(contador5===5){
                                document.getElementById('seis5').classList.remove('aparecer')
                                document.getElementById('quatro5').classList.remove('aparecer')
                                document.getElementById('cinco5').classList.add('aparecer')
                                contador2 = 5;
                                }else if(contador5>=6){
                                    document.getElementById('cinco5').classList.remove('aparecer')
                                    document.getElementById('seis5').classList.add('aparecer')
                                    contador5=6;
                                }
                                })
            butn5.addEventListener('click', function(){
            contador5= contador5 - 1;               
            if(contador5<=1){
                    document.getElementById('um5').classList.add('aparecer')
                    document.getElementById('dois5').classList.remove('aparecer')
                    contador5=1;
                } else if(contador5===2){
                    document.getElementById('dois5').classList.add('aparecer')
                    document.getElementById('tres5').classList.remove('aparecer')
                    } else if(contador5===3){
                        document.getElementById('quatro5').classList.remove('aparecer')
                        document.getElementById('tres5').classList.add('aparecer')
                        } else if(contador5===4){
                            document.getElementById('cinco5').classList.remove('aparecer')
                            document.getElementById('quatro5').classList.add('aparecer')
                            }else if(contador5===5){
                                document.getElementById('seis5').classList.remove('aparecer')
                                document.getElementById('cinco5').classList.add('aparecer')
                                }else if (contador5===6){
                                    document.getElementById('seis5').classList.add('aparecer')
                                }
                                })
            function fechaModal5(){
                document.getElementById('mod5').classList.remove('aparecer')
                document.getElementById('um5').classList.remove('aparecer')
                document.getElementById('dois5').classList.remove('aparecer')
                document.getElementById('tres5').classList.remove('aparecer')
                document.getElementById('quatro5').classList.remove('aparecer')
                document.getElementById('cinco5').classList.remove('aparecer')
                document.getElementById('seis5').classList.remove('aparecer')
                contador5= 1;
            }
        </script>

    <div class="bg-fundo"  id="mod6">
            <p class="fechar" onclick="fechaModal6()"></p>

            <img class="prev" id="drecrementar6" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um6">
                    <img src="./imagens/casa 6/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois6">
                    <img  src="./imagens/casa 6/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres6">
                    <img  src="./imagens/casa 6/img 3.jpg" alt="">
                </div>
                <div class="quatro" id="quatro6">
                    <img  src="./imagens/casa 6/img 4.jpg" alt="">
                </div>
                <div class="cinco"  id="cinco6">
                    <img  src="./imagens/casa 6/img 5.jpg" alt="">
                </div>
                <div class="seis"  id="seis6">
                    <img  src="./imagens/casa 6/img 6.jpg" alt="">
                </div>
            </div>

            <img class="next" id="incrementar6" src="./icones/seta_direita.png" alt="">
        </div>

            <script>
            function abrirModal6(){
                document.getElementById('mod6').classList.add('aparecer')
                document.getElementById('um6').classList.add('aparecer')
            }
            const botn6 = document.getElementById('incrementar6')
            const butn6 = document.getElementById('drecrementar6')
            let contador6 = 1;
            botn6.addEventListener('click', function(){
            contador6++;                   
            if(contador6===1){
                    document.getElementById('dois6').classList.remove('aparecer')
                    document.getElementById('um6').classList.add('aparecer')
                } else if(contador6===2){
                    document.getElementById('um6').classList.remove('aparecer')
                    document.getElementById('tres6').classList.remove('aparecer')
                    document.getElementById('dois6').classList.add('aparecer')
                    } else if(contador6===3){
                        document.getElementById('dois6').classList.remove('aparecer')
                        document.getElementById('quatro6').classList.remove('aparecer')
                        document.getElementById('tres6').classList.add('aparecer')
                        } else if(contador6===4){
                            document.getElementById('tres6').classList.remove('aparecer')
                            document.getElementById('cinco6').classList.remove('aparecer')
                            document.getElementById('quatro6').classList.add('aparecer')
                            }else if(contador6===5){
                                document.getElementById('seis6').classList.remove('aparecer')
                                document.getElementById('quatro6').classList.remove('aparecer')
                                document.getElementById('cinco6').classList.add('aparecer')
                                contador6 = 5;
                                }else if(contador6>=6){
                                    document.getElementById('cinco6').classList.remove('aparecer')
                                    document.getElementById('seis6').classList.add('aparecer')
                                    contador6=6;
                                }
                                })
            butn6.addEventListener('click', function(){
            contador6= contador6 - 1;               
            if(contador6<=1){
                    document.getElementById('um6').classList.add('aparecer')
                    document.getElementById('dois6').classList.remove('aparecer')
                    contador6=1;
                } else if(contador6===2){
                    document.getElementById('dois6').classList.add('aparecer')
                    document.getElementById('tres6').classList.remove('aparecer')
                    } else if(contador6===3){
                        document.getElementById('quatro6').classList.remove('aparecer')
                        document.getElementById('tres6').classList.add('aparecer')
                        } else if(contador6===4){
                            document.getElementById('cinco6').classList.remove('aparecer')
                            document.getElementById('quatro6').classList.add('aparecer')
                            }else if(contador6===5){
                                document.getElementById('seis6').classList.remove('aparecer')
                                document.getElementById('cinco6').classList.add('aparecer')
                                }else if (contador6===6){
                                    document.getElementById('seis6').classList.add('aparecer')
                                }
                                })
            function fechaModal6(){
                document.getElementById('mod6').classList.remove('aparecer')
                document.getElementById('um6').classList.remove('aparecer')
                document.getElementById('dois6').classList.remove('aparecer')
                document.getElementById('tres6').classList.remove('aparecer')
                document.getElementById('quatro6').classList.remove('aparecer')
                document.getElementById('cinco6').classList.remove('aparecer')
                document.getElementById('seis6').classList.remove('aparecer')
                contador6= 1;
            }
        </script>

        <div class="bg-fundo"  id="mod7">
            <p class="fechar" onclick="fechaModal7()"></p>

            <img class="prev" id="drecrementar7" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um7">
                    <img src="./imagens/casa 7/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois7">
                    <img  src="./imagens/casa 7/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres7">
                    <img  src="./imagens/casa 7/img 3.jpg" alt="">
                </div>
                <div class="quatro" id="quatro7">
                    <img  src="./imagens/casa 7/img 4.jpg" alt="">
                </div>
                <div class="cinco"  id="cinco7">
                    <img  src="./imagens/casa 7/img 5.jpg" alt="">
                </div>
                <div class="seis"  id="seis7">
                    <img  src="./imagens/casa 7/img 6.jpg" alt="">
                </div>    
            </div>
                <img class="next" id="incrementar7" src="./icones/seta_direita.png" alt="">
        </div>

        <script>
            function abrirModal7(){
                document.getElementById('mod7').classList.add('aparecer')
                document.getElementById('um7').classList.add('aparecer')
            }
            const botn7 = document.getElementById('incrementar7')
            const butn7 = document.getElementById('drecrementar7')
            let contador7 = 1;
            botn7.addEventListener('click', function(){
            contador7++;                   
            if(contador7===1){
                    document.getElementById('dois7').classList.remove('aparecer')
                    document.getElementById('um7').classList.add('aparecer')
                } else if(contador7===2){
                    document.getElementById('um7').classList.remove('aparecer')
                    document.getElementById('tres7').classList.remove('aparecer')
                    document.getElementById('dois7').classList.add('aparecer')
                    } else if(contador7===3){
                        document.getElementById('dois7').classList.remove('aparecer')
                        document.getElementById('quatro7').classList.remove('aparecer')
                        document.getElementById('tres7').classList.add('aparecer')
                        } else if(contador7===4){
                            document.getElementById('tres7').classList.remove('aparecer')
                            document.getElementById('cinco7').classList.remove('aparecer')
                            document.getElementById('quatro7').classList.add('aparecer')
                            }else if(contador7===5){
                                document.getElementById('seis7').classList.remove('aparecer')
                                document.getElementById('quatro7').classList.remove('aparecer')
                                document.getElementById('cinco7').classList.add('aparecer')
                                contador7 = 5;
                                }else if(contador7>=6){
                                    document.getElementById('cinco7').classList.remove('aparecer')
                                    document.getElementById('seis7').classList.add('aparecer')
                                    contador7=6;
                                }
                                })
            butn7.addEventListener('click', function(){
            contador7= contador7 - 1;               
            if(contador7<=1){
                    document.getElementById('um7').classList.add('aparecer')
                    document.getElementById('dois7').classList.remove('aparecer')
                    contador7=1;
                } else if(contador7===2){
                    document.getElementById('dois7').classList.add('aparecer')
                    document.getElementById('tres7').classList.remove('aparecer')
                    } else if(contador7===3){
                        document.getElementById('quatro7').classList.remove('aparecer')
                        document.getElementById('tres7').classList.add('aparecer')
                        } else if(contador7===4){
                            document.getElementById('cinco7').classList.remove('aparecer')
                            document.getElementById('quatro7').classList.add('aparecer')
                            }else if(contador7===5){
                                document.getElementById('seis7').classList.remove('aparecer')
                                document.getElementById('cinco7').classList.add('aparecer')
                                }else if (contador7===6){
                                    document.getElementById('seis7').classList.add('aparecer')
                                }
                                })
            function fechaModal7(){
                document.getElementById('mod7').classList.remove('aparecer')
                document.getElementById('um7').classList.remove('aparecer')
                document.getElementById('dois7').classList.remove('aparecer')
                document.getElementById('tres7').classList.remove('aparecer')
                document.getElementById('quatro7').classList.remove('aparecer')
                document.getElementById('cinco7').classList.remove('aparecer')
                document.getElementById('seis7').classList.remove('aparecer')
                contador7= 1;
            }
        </script>

        <div class="bg-fundo"  id="mod8">
            <p class="fechar" onclick="fechaModal()"></p>

            <img class="prev" id="drecrementar8" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um8">
                    <img src="./imagens/casa 8/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois8">
                    <img  src="./imagens/casa 8/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres8">
                    <img  src="./imagens/casa 8/img 3.jpg" alt="">
                </div>
                <div class="quatro" id="quatro8">
                    <img  src="./imagens/casa 8/img 4.jpg" alt="">
                </div>
                <div class="cinco"  id="cinco8">
                    <img  src="./imagens/casa 8/img 5.jpg" alt="">
                </div>
                <div class="dois"   id="seis8">
                    <img  src="./imagens/casa 8/img 6.jpg" alt="">
                </div>
                <div class="tres"   id="sete8">
                    <img  src="./imagens/casa 8/img 7.jpg" alt="">
                </div>
                <div class="quatro" id="oito8">
                    <img  src="./imagens/casa 8/img 8.jpg" alt="">
                </div>
                <div class="cinco"  id="nove8">
                    <img  src="./imagens/casa 8/img 9.jpg" alt="">
                </div>
            </div>

            <img class="next" id="incrementar8" src="./icones/seta_direita.png" alt="">
        </div>

        <script>
            function abrirModal8(){
                document.getElementById('mod8').classList.add('aparecer')
                document.getElementById('um8').classList.add('aparecer')
            }
            const botn8 = document.getElementById('incrementar8')
            const butn8 = document.getElementById('drecrementar8')
            let contador8 = 1;
            botn8.addEventListener('click', function(){
            contador8++;                   
            if(contador8===1){
                    document.getElementById('dois8').classList.remove('aparecer')
                    document.getElementById('um8').classList.add('aparecer')
                } else if(contador8===2){
                    document.getElementById('um8').classList.remove('aparecer')
                    document.getElementById('tres8').classList.remove('aparecer')
                    document.getElementById('dois8').classList.add('aparecer')
                    } else if(contador8===3){
                        document.getElementById('dois8').classList.remove('aparecer')
                        document.getElementById('quatro8').classList.remove('aparecer')
                        document.getElementById('tres8').classList.add('aparecer')
                        } else if(contador8===4){
                            document.getElementById('tres8').classList.remove('aparecer')
                            document.getElementById('cinco8').classList.remove('aparecer')
                            document.getElementById('quatro8').classList.add('aparecer')
                            }else if(contador8===5){
                                document.getElementById('seis8').classList.remove('aparecer')
                                document.getElementById('quatro8').classList.remove('aparecer')
                                document.getElementById('cinco8').classList.add('aparecer')
                                contador8 = 5;
                                }else if(contador8===6){
                                    document.getElementById('sete8').classList.remove('aparecer')
                                    document.getElementById('cinco8').classList.remove('aparecer')
                                    document.getElementById('seis8').classList.add('aparecer')
                                    contador8=6;
                                    }else if(contador8===7){
                                        document.getElementById('seis8').classList.remove('aparecer')
                                        document.getElementById('oito8').classList.remove('aparecer')
                                        document.getElementById('sete8').classList.add('aparecer')
                                        }else if(contador8===8){
                                            document.getElementById('nove8').classList.remove('aparecer')
                                            document.getElementById('sete8').classList.remove('aparecer')
                                            document.getElementById('oito8').classList.add('aparecer')
                                            }else if(contador8>=9){
                                                document.getElementById('oito8').classList.remove('aparecer')
                                                document.getElementById('nove8').classList.add('aparecer')
                                                contador8 = 9;
                                            }
                                })
            butn8.addEventListener('click', function(){
            contador8= contador8 - 1;               
            if(contador8<=1){
                    document.getElementById('um8').classList.add('aparecer')
                    document.getElementById('dois8').classList.remove('aparecer')
                    contador8=1;
                } else if(contador8===2){
                    document.getElementById('dois8').classList.add('aparecer')
                    document.getElementById('tres8').classList.remove('aparecer')
                    } else if(contador8===3){
                        document.getElementById('tres8').classList.add('aparecer')
                        document.getElementById('quatro8').classList.remove('aparecer')
                        } else if(contador8===4){
                            document.getElementById('quatro8').classList.add('aparecer')                            
                            document.getElementById('cinco8').classList.remove('aparecer')
                            }else if(contador8===5){
                                document.getElementById('cinco8').classList.add('aparecer')                                
                                document.getElementById('seis8').classList.remove('aparecer')
                                }else if (contador8===6){
                                    document.getElementById('seis8').classList.add('aparecer')
                                    document.getElementById('sete8').classList.remove('aparecer')
                                    }else if(contador8===7){
                                        document.getElementById('sete8').classList.add('aparecer')
                                        document.getElementById('oito8').classList.remove('aparecer')
                                        }else if(contador8===8){
                                            document.getElementById('oito8').classList.add('aparecer')
                                            document.getElementById('nove8').classList.remove('aparecer')
                                            }else if(contador8===9){
                                                document.getElementById('nove8').classList.add('aparecer')
                                            }
                                })
            function fechaModal8(){
                document.getElementById('mod8').classList.remove('aparecer')
                document.getElementById('um8').classList.remove('aparecer')
                document.getElementById('dois8').classList.remove('aparecer')
                document.getElementById('tres8').classList.remove('aparecer')
                document.getElementById('quatro8').classList.remove('aparecer')
                document.getElementById('cinco8').classList.remove('aparecer')
                document.getElementById('seis8').classList.remove('aparecer')
                document.getElementById('sete8').classList.remove('aparecer')
                document.getElementById('oito8').classList.remove('aparecer')
                document.getElementById('nove8').classList.remove('aparecer')
                contador8= 1;
            }
        </script>
        
        <div class="bg-fundo"  id="mod9">
            <p class="fechar" onclick="fechaModal9()"></p>

            <img class="prev" id="drecrementar9" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um9">
                    <img src="./imagens/casa 9/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois9">
                    <img  src="./imagens/casa 9/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres9">
                    <img  src="./imagens/casa 9/img 3.jpg" alt="">
                </div>
                <div class="quatro" id="quatro9">
                    <img  src="./imagens/casa 9/img 4.jpg" alt="">
                </div>
                <div class="cinco"  id="cinco9">
                    <img  src="./imagens/casa 9/img 5.jpg" alt="">
                </div>
                <div class="dois"   id="seis9">
                    <img  src="./imagens/casa 9/img 6.jpg" alt="">
                </div>
            </div>

            <img class="next" id="incrementar9" src="./icones/seta_direita.png" alt="">
        </div>

        <script>
            function abrirModal9(){
                document.getElementById('mod9').classList.add('aparecer')
                document.getElementById('um9').classList.add('aparecer')
            }
            const botn9 = document.getElementById('incrementar9')
            const butn9= document.getElementById('drecrementar9')
            let contador9 = 1;
            botn9.addEventListener('click', function(){
            contador9++;                   
            if(contador9===1){
                    document.getElementById('dois9').classList.remove('aparecer')
                    document.getElementById('um9').classList.add('aparecer')
                } else if(contador9===2){
                    document.getElementById('um9').classList.remove('aparecer')
                    document.getElementById('tres9').classList.remove('aparecer')
                    document.getElementById('dois9').classList.add('aparecer')
                    } else if(contador9===3){
                        document.getElementById('dois9').classList.remove('aparecer')
                        document.getElementById('quatro9').classList.remove('aparecer')
                        document.getElementById('tres9').classList.add('aparecer')
                        } else if(contador9===4){
                            document.getElementById('tres9').classList.remove('aparecer')
                            document.getElementById('cinco9').classList.remove('aparecer')
                            document.getElementById('quatro9').classList.add('aparecer')
                            }else if(contador9===5){
                                document.getElementById('seis9').classList.remove('aparecer')
                                document.getElementById('quatro9').classList.remove('aparecer')
                                document.getElementById('cinco9').classList.add('aparecer')
                                }else if(contador9>=6){
                                    document.getElementById('cinco9').classList.remove('aparecer')
                                    document.getElementById('seis9').classList.add('aparecer')
                                    contador9=6;}
                                })
            butn9.addEventListener('click', function(){
            contador9 = contador9 - 1;               
            if(contador9<=1){
                    document.getElementById('um9').classList.add('aparecer')
                    document.getElementById('dois9').classList.remove('aparecer')
                    contador9=1;
                } else if(contador9===2){
                    document.getElementById('dois9').classList.add('aparecer')
                    document.getElementById('tres9').classList.remove('aparecer')
                    } else if(contador9===3){
                        document.getElementById('tres9').classList.add('aparecer')
                        document.getElementById('quatro9').classList.remove('aparecer')
                        } else if(contador9===4){
                            document.getElementById('quatro9').classList.add('aparecer')                            
                            document.getElementById('cinco9').classList.remove('aparecer')
                            }else if(contador9===5){
                                document.getElementById('cinco9').classList.add('aparecer')                                
                                document.getElementById('seis9').classList.remove('aparecer')
                                }else if (contador9===6){
                                    document.getElementById('seis9').classList.add('aparecer')
                                    }
                                })
            function fechaModal9(){
                document.getElementById('mod9').classList.remove('aparecer')
                document.getElementById('um9').classList.remove('aparecer')
                document.getElementById('dois9').classList.remove('aparecer')
                document.getElementById('tres9').classList.remove('aparecer')
                document.getElementById('quatro9').classList.remove('aparecer')
                document.getElementById('cinco9').classList.remove('aparecer')
                document.getElementById('seis9').classList.remove('aparecer')
                contador9= 1;
            }
        </script>


<div class="bg-fundo"  id="mod10">
            <p class="fechar" onclick="fechaModal10()"></p>

            <img class="prev" id="drecrementar10" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um10">
                    <img src="./imagens/casa 10/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois10">
                    <img  src="./imagens/casa 10/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres10">
                    <img  src="./imagens/casa 10/img 3.jpg" alt="">
                </div>
                <div class="quatro" id="quatro10">
                    <img  src="./imagens/casa 10/img 4.jpg" alt="">
                </div>
                <div class="cinco"  id="cinco10">
                    <img  src="./imagens/casa 10/img 5.jpg" alt="">
                </div>
            </div>

            <img class="next" id="incrementar10" src="./icones/seta_direita.png" alt="">
        </div>

        <script>
            function abrirModal10(){
                document.getElementById('mod10').classList.add('aparecer')
                document.getElementById('um10').classList.add('aparecer')
            }
            const botn10 = document.getElementById('incrementar10')
            const butn10= document.getElementById('drecrementar10')
            let contador10 = 1;
            botn10.addEventListener('click', function(){
            contador10++;                   
            if(contador10===1){
                    document.getElementById('dois10').classList.remove('aparecer')
                    document.getElementById('um10').classList.add('aparecer')
                } else if(contador10===2){
                    document.getElementById('um10').classList.remove('aparecer')
                    document.getElementById('tres10').classList.remove('aparecer')
                    document.getElementById('dois10').classList.add('aparecer')
                    } else if(contador10===3){
                        document.getElementById('dois10').classList.remove('aparecer')
                        document.getElementById('quatro10').classList.remove('aparecer')
                        document.getElementById('tres10').classList.add('aparecer')
                        } else if(contador10===4){
                            document.getElementById('tres10').classList.remove('aparecer')
                            document.getElementById('cinco10').classList.remove('aparecer')
                            document.getElementById('quatro10').classList.add('aparecer')
                            }else if(contador10>=5){
                                    document.getElementById('quatro10').classList.remove('aparecer')
                                    document.getElementById('cinco10').classList.add('aparecer')
                                    contador10=5;}
                                })
            butn10.addEventListener('click', function(){
            contador10 = contador10 - 1;               
            if(contador10<=1){
                    document.getElementById('um10').classList.add('aparecer')
                    document.getElementById('dois10').classList.remove('aparecer')
                    contador10=1;
                } else if(contador10===2){
                    document.getElementById('dois10').classList.add('aparecer')
                    document.getElementById('tres10').classList.remove('aparecer')
                    } else if(contador10===3){
                        document.getElementById('tres10').classList.add('aparecer')
                        document.getElementById('quatro10').classList.remove('aparecer')
                        } else if(contador10===4){
                            document.getElementById('quatro10').classList.add('aparecer')                            
                            document.getElementById('cinco10').classList.remove('aparecer')
                            }else if(contador10===5){
                                document.getElementById('cinco10').classList.add('aparecer')                               
                                }})
            function fechaModal10(){
                document.getElementById('mod10').classList.remove('aparecer')
                document.getElementById('um10').classList.remove('aparecer')
                document.getElementById('dois10').classList.remove('aparecer')
                document.getElementById('tres10').classList.remove('aparecer')
                document.getElementById('quatro10').classList.remove('aparecer')
                document.getElementById('cinco10').classList.remove('aparecer')
                contador10= 1;
            }
        </script>

        <div class="bg-fundo"  id="mod11">
            <p class="fechar" onclick="fechaModal11()"></p>

            <img class="prev" id="drecrementar11" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um11">
                    <img src="./imagens/casa 11/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois11">
                    <img  src="./imagens/casa 11/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres11">
                    <img  src="./imagens/casa 11/img 3.jpg" alt="">
                </div>
            </div>

            <img class="next" id="incrementar11" src="./icones/seta_direita.png" alt="">
        </div>

        <script>
            function abrirModal11(){
                document.getElementById('mod11').classList.add('aparecer')
                document.getElementById('um11').classList.add('aparecer')
            }
            const botn11 = document.getElementById('incrementar11')
            const butn11= document.getElementById('drecrementar11')
            let contador11 = 1;
            botn11.addEventListener('click', function(){
            contador11++;                   
            if(contador11===1){
                    document.getElementById('dois11').classList.remove('aparecer')
                    document.getElementById('um11').classList.add('aparecer')
                } else if(contador11===2){
                    document.getElementById('um11').classList.remove('aparecer')
                    document.getElementById('tres11').classList.remove('aparecer')
                    document.getElementById('dois11').classList.add('aparecer')
                    } else if(contador11>=3){
                        document.getElementById('dois11').classList.remove('aparecer')
                        document.getElementById('tres11').classList.add('aparecer')
                        contador11=3;
                        }
                        })
            butn11.addEventListener('click', function(){
            contador11 = contador11 - 1;               
            if(contador11<=1){
                    document.getElementById('um11').classList.add('aparecer')
                    document.getElementById('dois11').classList.remove('aparecer')
                    contador11=1;
                } else if(contador11===2){
                    document.getElementById('dois11').classList.add('aparecer')
                    document.getElementById('tres11').classList.remove('aparecer')
                    } else if(contador11===3){
                        document.getElementById('tres1').classList.add('aparecer')
                        }
                        })
            function fechaModal11(){
                document.getElementById('mod11').classList.remove('aparecer')
                document.getElementById('um11').classList.remove('aparecer')
                document.getElementById('dois11').classList.remove('aparecer')
                document.getElementById('tres11').classList.remove('aparecer')
                contador11= 1;
            }
        </script>

        <div class="bg-fundo"  id="mod12">
            <p class="fechar" onclick="fechaModal12()"></p>

            <img class="prev" id="drecrementar12" src="./icones/seta esquerda.png" alt=""> 

            <div class="modalBox"> 
                <div class="um" id="um12">
                    <img src="./imagens/casa 12/img 1.jpg" alt="">                    
                </div>
                <div class="dois"   id="dois12">
                    <img  src="./imagens/casa 12/img 2.jpg" alt="">
                </div>
                <div class="tres"   id="tres12">
                    <img  src="./imagens/casa 12/img 3.jpg" alt="">
                </div>
            </div>

            <img class="next" id="incrementar12" src="./icones/seta_direita.png" alt="">
        </div>

        <script>
            function abrirModal12(){
                document.getElementById('mod12').classList.add('aparecer')
                document.getElementById('um12').classList.add('aparecer')
            }
            const botn12 = document.getElementById('incrementar12')
            const butn12= document.getElementById('drecrementar12')
            let contador12 = 1;
            botn12.addEventListener('click', function(){
            contador12++;                   
            if(contador12===1){
                    document.getElementById('dois12').classList.remove('aparecer')
                    document.getElementById('um12').classList.add('aparecer')
                } else if(contador12===2){
                    document.getElementById('um12').classList.remove('aparecer')
                    document.getElementById('tres12').classList.remove('aparecer')
                    document.getElementById('dois12').classList.add('aparecer')
                    } else if(contador12>=3){
                        document.getElementById('dois12').classList.remove('aparecer')
                        document.getElementById('tres12').classList.add('aparecer')
                        contador12=3;
                        }
                        })
            butn12.addEventListener('click', function(){
            contador12 = contador12 - 1;               
            if(contador12<=1){
                    document.getElementById('um12').classList.add('aparecer')
                    document.getElementById('dois12').classList.remove('aparecer')
                    contador12=1;
                } else if(contador12===2){
                    document.getElementById('dois12').classList.add('aparecer')
                    document.getElementById('tres12').classList.remove('aparecer')
                    } else if(contador12===3){
                        document.getElementById('tres12').classList.add('aparecer')
                        }
                        })
            function fechaModal12(){
                document.getElementById('mod12').classList.remove('aparecer')
                document.getElementById('um12').classList.remove('aparecer')
                document.getElementById('dois12').classList.remove('aparecer')
                document.getElementById('tres12').classList.remove('aparecer')
                contador12= 1;
            }
        </script>

    </section>

</body>
<?php
include('footer.php')
?>