<?php  $this->layout('master', ['title' => 'Inicio']) ?>

        <style>
            .index{
                top: 5%;
                left: 50%;
                transform: translatex(-50%);
                width: 90%;
                height: fit-content;
                /* border: 1px solid black; */
                
            }
            section{
                width: 100%;
                height: fit-content;
                
                /* border: 1px solid black; */
            }
            h1{
                font-family: "Baskervville SC", "Serif";
                font-size: 5rem;
                margin:  0 0 0 25px;
                color: var(--carmine);
                text-shadow: 2px 2px 5px var(--eerie-black);
                
            }
            h1 span{
                color: var(--eerie-black);
                text-shadow: 2px 2px 5px var(--carmine);
                font-size: 6rem;
            }
            .boxMailAnimated{
                width: 100%;
                height: 60px;
                position: relative;
                background-color: var(--eerie-black);
                border-radius: 50px;
            }
            .subTittle{
                margin: 0;
                position: absolute;
                top: 50%;
                left: 4%;
                transform: translatey(-50%);
                color: var(--orange-web);
            }
            .mailAnimation{
                color: var(--orange-web);
                position: absolute;
                left: 26%;
                top: 50%;
                transform: translatey(-50%);
                text-shadow: 4px 2px 4px white;
                width: 50px;
                height: 50px;
                margin-left: 0;
                animation: mailSending 4s forwards ;
            } 

            @keyframes mailSending {

                0% {
                    left: 26%;
                    color: var(--orange-web);
                }
                100% {
                    left: 95%;
                    color: green;
                }
            } */

            </style>
<main>
    <div class="index">
        <section>
                <h1><span>A</span>rraia <span>M</span>ailer</h1>
        </section>
        <section>
            <div class="boxMailAnimated">
                <h2 class="subTittle">Serviço de email marketing</h2>
                <ion-icon class="mailAnimation" name="mail-outline"></ion-icon>
            </div>
        </section>
        <section>

        </section>

    </div>

</main>