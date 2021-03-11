<html>
<head>
<title>Code Editor ~ Kaito Coding</title>
 <link rel="icon" type="image/x-icon" href="https://img.icons8.com/ios-filled/50/000000/github-2.png">
<link rel="stylesheet" href="https://codemirror.net/lib/codemirror.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/3024-day.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/3024-night.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/abcdef.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/ambiance.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/base16-dark.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/base16-light.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/bespin.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/blackboard.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/cobalt.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/colorforth.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/darcula.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/dracula.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/duotone-dark.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/duotone-light.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/eclipse.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/elegant.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/erlang-dark.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/gruvbox-dark.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/hopscotch.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/icecoder.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/idea.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/isotope.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/lesser-dark.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/liquibyte.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/lucario.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/material.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/mbo.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/mdn-like.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/midnight.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/monokai.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/neat.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/neo.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/night.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/nord.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/oceanic-next.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/panda-syntax.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/paraiso-dark.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/paraiso-light.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/pastel-on-dark.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/railscasts.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/rubyblue.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/seti.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/shadowfox.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/solarized.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/the-matrix.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/tomorrow-night-bright.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/tomorrow-night-eighties.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/twilight.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/vibrant-ink.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/xq-dark.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/xq-light.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/yeti.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/yonce.css">
    <link rel="stylesheet" href="https://codemirror.net/theme/zenburn.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://codemirror.net/lib/codemirror.js"></script>
    <script src="https://codemirror.net/mode/clike/clike.js"></script>
    <script src="https://codemirror.net/mode/ruby/ruby.js"></script>
    <script src="https://codemirror.net/mode/python/python.js"></script>
    <script src="https://codemirror.net/mode/css/css.js"></script>
    <script src="https://codemirror.net/mode/javascript/javascript.js"></script>
    <script src="https://codemirror.net/mode/xml/xml.js"></script>
    <script src="https://codemirror.net/mode/htmlmixed/htmlmixed.js"></script>
    <script src="https://codemirror.net/addon/fold/xml-fold.js"></script>
    <script src="https://codemirror.net/addon/edit/closebrackets.js"></script>
    <script src="https://codemirror.net/addon/edit/matchbrackets.js"></script>
    <script src="https://codemirror.net/addon/edit/closetag.js"></script>
    <script src="https://codemirror.net/addon/edit/matchtags.js"></script>
    <script src="https://codemirror.net/addon/selection/active-line.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<style>
body{
 margin:0;
 background:#0c1021;
}

input[type=text]{
 width:309px; 
 background:#333;
 outline:none;
 border:0;
 padding:4px;
 color:white;
 font-family:sans-serif;
}

input[type=submit]{
 background:indigo;
 border:0;
 border-radius:3px;
 color:white;
 padding:4px;
 outline:0;
 width:55px;
}
input[type=submit]:hover{
    background:white;
    color:black;
}

#editor{
 overflow-x:hidden;
}

.CodeMirror{
 height:93vh;
 font-family:monospace;
 font-size: 12px;
}

a{
 text-decoration:none;
 color:lime;
}
a:hover{
 background:blue;
}

</style>

<script>


$(document).ready(function() {
  var textArea = document.getElementById("cm");
  var editor = CodeMirror.fromTextArea(textArea, {
    lineNumbers: true,
    indentWithTabs: true,
    matchBrackets: true,
    matchTags: true,
      autoCloseBrackets: true,
    autoCloseTags: true,
    styleActiveLine: true,
    theme: "blackboard",
    mode: "javascript",
    tabSize: 2
  });

  $('#theme-choice').change(function() {
    editor.setOption("theme", $(this).val());
  });

  $('#language-choice').change(function() {
    editor.setOption("mode", "text/" + $(this).val());
  });

  $("#prev-theme").click(function() {
    $("#theme-choice > option:selected").prop("selected", false).prev().prop("selected", true).trigger("change");
  });

  $("#next-theme").click(function() {
    $("#theme-choice > option:selected").prop("selected", false).next().prop("selected", true).trigger("change");
  });
});

</script>

</head>

<body ONCONTEXTMENU="return false;">
<form method="POST">
    <div id="panel">
        <select id="theme-choice">
          <option selected>Theme</option>
          <option>3024-day</option>
          <option>3024-night</option>
          <option>abcdef</option>
          <option>ambiance</option>
          <option>base16-dark</option>
          <option>base16-light</option>
          <option>bespin</option>
          <option>blackboard</option>
          <option>cobalt</option>
          <option>colorforth</option>
          <option>darcula</option>
          <option>dracula</option>
          <option>duotone-dark</option>
          <option>duotone-light</option>
          <option>eclipse</option>
          <option>elegant</option>
          <option>erlang-dark</option>
          <option>gruvbox-dark</option>
          <option>hopscotch</option>
          <option>icecoder</option>
          <option>idea</option>
          <option>isotope</option>
          <option>lesser-dark</option>
          <option>liquibyte</option>
          <option>lucario</option>
          <option>material</option>
          <option>mbo</option>
          <option>mdn-like</option>
          <option>midnight</option>
          <option>monokai</option>
          <option>neat</option>
          <option>neo</option>
          <option>night</option>
          <option>nord</option>
          <option>oceanic-next</option>
          <option>panda-syntax</option>
          <option>paraiso-dark</option>
          <option>paraiso-light</option>
          <option>pastel-on-dark</option>
          <option>railscasts</option>
          <option>rubyblue</option>
          <option>seti</option>
          <option>shadowfox</option>
          <option>solarized dark</option>
          <option>solarized light</option>
          <option>the-matrix</option>
          <option>tomorrow-night-bright</option>
          <option>tomorrow-night-eighties</option>
          <option>twilight</option>
          <option>vibrant-ink</option>
          <option>xq-dark</option>
          <option>xq-light</option>
          <option>yeti</option> 
          <option>yonce</option>
          <option>zenburn</option>
        </select>

      <select id="language-choice">
        <option value="" selected>Language</option>
        <option value="x-csrc">C</option>
        <option value="x-c++src">C++</option>
        <option value="x-csharp">C#</option>
        <option value="x-java">Java</option>
        <option value="x-python">Python 3</option>
        <option value="x-ruby">Ruby</option>
        <option value="css">CSS</option>
        <option value="html">HTML</option>
        <option value="javascript">JavaScript</option>
      </select>
<?php
$path = getcwd();
echo "
      <input type=text name=kai value='$path/code.php'>
      <input type=submit name=save value=Save >";

$kai = $_POST['kai'];
$code = $_POST['code'];
if(isset($_POST['save'])){
  $fp = fopen("$kai","w");
   fwrite($fp,$code);
   fclose($fp);
   echo "<font style='color:lime;'> Success     [ <a target='_blank' href='/code.php'>view</a> ]</font>";
}

echo "
    </div>
<div id=editor>
      <textarea id=cm name=code>".htmlspecialchars(file_get_contents($kai))."</textarea>
     </form>
</div>
";
?>

</body>

</html>
