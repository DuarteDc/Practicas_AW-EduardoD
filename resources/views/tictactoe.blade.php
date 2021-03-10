<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            #container{
                display: grid;
                grid-template: repeat(3, 100px) / repeat(3, 100px);
            }
            span{
                display: flex;
                align-items: center;
                justify-content: center; 
                border: 1px solid#000;
                cursor: pointer;
                font-size: 30px;
                font-family:Arial, Helvetica, sans-serif;
            }
            span:hover{
                background-color: rgba(12, 243, 193, 0.4);
            }
            p{
                font-size: 30px;
                font-family:Arial, Helvetica, sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                <h2>Básico</h2>
            </div>
            <p>Turno de:</p><p id="turno"></p>
            <div id="container"></div>
            <div class="links">    
                <a href="{{route('inicio')}}">regresar</a>
            </div>
        </div>
        <script>
            const game=[
                ['','',''],
                ['','',''],
                ['','',''],
            ]; 
            let currentUser='O';
            function checkStatus(user){
                if(game[0][0]===user && game[0][1]===user && game[0][2]===user){
                    return true;
                }
                if(game[1][0]===user && game[1][1]===user && game[1][2]===user){
                    return true;
                }
                if(game[2][0]===user && game[2][1]===user && game[2][2]===user){
                    return true;
                }
                if(game[0][0]===user && game[1][0]===user && game[2][0]===user){
                    return true;
                }
                if(game[0][1]===user && game[1][1]===user && game[2][1]===user){
                    return true;
                }
                if(game[0][2]===user && game[1][2]===user && game[2][2]===user){
                    return true;
                }
                if(game[0][0]===user && game[1][1]===user && game[2][2]===user){
                    return true;
                }
                if(game[2][0]===user && game[1][1]===user && game[0][2]===user){
                    return true;
                }
                return false;
            }
            function setWinner(user){
                alert(`Gano el usuario ${user}`);
                console.log(game);
                var spa=document.getElementsByTagName('span');
                for (let i=0; i<spa.length; i++){
                    spa[i].innerHTML=''
                }
                game[0][0]='';
                game[0][1]='';
                game[0][2]='';
                game[1][0]='';
                game[1][1]='';
                game[1][2]='';
                game[2][0]='';
                game[2][1]='';
                game[2][2]='';
            }
            function remove(el) {
                el.removeEventListener();
            }
            var turno1=document.getElementById('turno').innerHTML='';
            function selectItem() { 
                if(game[this.dataset.row][this.dataset.column]){
                    game[this.dataset.row][this.dataset.column]=game[this.dataset.row][this.dataset.column];
                    remove();
                }else{
                    game[this.dataset.row][this.dataset.column]=currentUser;
                }
                
                setBoard()
                if(checkStatus(currentUser)){
                    setWinner(currentUser);
                }
                if (currentUser==='O'){
                    var turno1=document.getElementById('turno').innerHTML='X';
                    currentUser='X';
                }else{
                    var turno1=document.getElementById('turno').innerHTML='O';
                    currentUser='O';
                }
            }
            function render({content, row, column}, containers) {
                var el=document.createElement('span');
                el.textContent=`${content}`
                    el.addEventListener('click', selectItem);
                el.dataset.row=row;
                el.dataset.column=column;
                container.append(el);
            }
            function setBoard() {
                var turno1=document.getElementById('turno').innerHTML=currentUser;
                container.innerHTML='';
            game.forEach((row,indexRow)=>{
                row.forEach((column, indexColumn)=>{

                    render({
                        content:column,
                        row:indexRow,
                        column:indexColumn,
                        },window.container);
                });
            });
            
            }
            setBoard();
        </script>
    </body>
</html>
