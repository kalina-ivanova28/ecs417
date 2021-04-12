<html>
    <head>
      <meta charset="utf-8">
      <title>Blog Page</title>
    </head>
    <hgroup>
      <header>
        <link rel="reset" href="reset.css">
        <link rel="stylesheet" href="stylesheet_blogpage.css">
      </header>
  </hgroup>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <fieldset>
        <legend>Blog Post</legend>
        <p>
            <label>Title:</label><br/>
            <input type="text" name="title" id="title_blogpost"><br/>
        </p>
        <p>
            <label>Text:</label><br/>
            <textarea rows="10" cols="70" name="text1" id="textarea_blogpost">Write your post here...</textarea><br/>
        </p>
        <button type="button" onclick="AreYouSure()" >Clear</button>
        <input type="submit" id="submit" onsubmit='preventDefault()'>
        <!--<button type="button" onclick='preventDefault()'>Submit</button>-->
    </fieldset>
  </form>
  <script type='text/javascript'>
    title_Box=document.getElementById('title_blogpost');
    text_Box=document.getElementById('textarea_blogpost');
    function preventDefault(){
      if ((title_Box.value=="") || (text_Box.value=="")){
        warning();
      }
    }

    function warning(){
        // if (title_Box.value==""){
        //     document.getElementById('title_blogpost').style.border="5px solid #B22222";
        // }
        // else if (text_Box.value == ""){
        //     document.getElementById('textarea_blogpost').style.border="5px solid #B22222";
        // }
        // else{
        //     document.getElementById('title_blogpost').style.border="2px solid #B22222";
        //     document.getElementById('textarea_blogpost').style.border="2px solid #B22222";
        // }

        alert('You need to add information in the fields.');
    } 
    
    function AreYouSure(){
      var clear_confirm=confirm("Are you sure you want to delete it?");
      if(clear_confirm==true){
        title_Box.value ="";
        text_Box.value ="";
      }
    }
  </script>
    
  
</html>