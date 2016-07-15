<html>
<head>
<title>Backupper ++</title>
</head>
<body>
<style>
   .design {
    display: inline-block; /* Строчно-блочный элемент */
    padding: 5px 20px; /* Добавляем поля */
    text-decoration: none; /* Убираем подчёркивание у ссылки */
    cursor: pointer; /* Курсор в виде руки */
    background: #deefff; /* Фон для браузеров, не поддерживающих градиент */
    /* Градиент */
    background: -moz-linear-gradient(top, #deefff 0%, #98bede 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#deefff), color-stop(100%,#98bede));
    background: -webkit-linear-gradient(top, #deefff 0%,#98bede 100%);
    background: -o-linear-gradient(top, #deefff 0%,#98bede 100%);
    background: -ms-linear-gradient(top, #deefff 0%,#98bede 100%);
    background: linear-gradient(top, #deefff 0%,#98bede 100%);
    border: 1px solid #008; /* Добавляем синюю рамку */
    color: #2c539e; /* Цвет текста и ссылки */
   }
  </style>
<p><a href="backup.php" class="design">Бэкап</a>

         <?php 
         echo "Привет, я - скрипт PHP!"; 
         ?>

     </body>
</html>