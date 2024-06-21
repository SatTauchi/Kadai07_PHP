<html>

<head>
  <meta charset="UTF-8">
  <title>おさかなハぅマっチ？</title>
  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style01.css">
  
  <link rel="icon" href="img/Logo2.webp" type="image/x-icon">
</head>

<body>

    <div id="header">
        <img id="logo" src="img/Logo2.webp" alt="">
        <h1>おさかなハぅマっチ？</h1>
    </div>
  
<main>

    <div class="input-area">
    <div id="input-area01">
        <form action="write_post.php" method="post">
            <input id="date" type="date" name="date"> 
            <select id="fish" name="fish">
                <option value="" disabled selected style="display: none;">おさかな</option>
                    <option>ハマチ</option>
                    <option>マグロ</option>
                    <option>サバ</option>  
                    <option>アジ</option>
            </select>
            <select id="place" name="place">
                <option value="" disabled selected style="display: none;">産地</option>
                    <option>北海道</option>
                    <option>江戸前</option>
                    <option>九州</option>
            </select>
            <input id="price"  type="number" placeholder="金額を入力（円/kg）" name="price">
            <textarea id="remarks" placeholder="Remarks" name="remarks"></textarea>
            
            
            <div class="input_file">
                <div class="preview">
                    <form action="write_post.php" method="post" enctype="multipart/form-data">
                    <input accept="image/*" id="imgFile" type="file" name="imgFile">
                </div>
            </div>
            <div class="button-area">
            <button type="submit" value="送信">セーブ</button>
            </div>
        </form>
    </div>
      
      
    
      <!-- <p id="graph_title">豊洲市場価格</p>
      <div id="graph_area">
        <canvas id="graph"></canvas> -->
        <!-- <canvas id="myChart"></canvas> -->
      </div>
    </div>
    
    
  </main>

  <footer>
    © 2024 Satoru Tauchi
  </footer>


  <!-- 以下にjs -->
  <script src="js/fish_price_checker01.js"></script>
  <script type="module" src="js/fish_price_checker01.js"></script>


</body>

</html>