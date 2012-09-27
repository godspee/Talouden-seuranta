<!DOCTYPE html>
<html>
  <head>
    <title>Jotain nokkelaa</title>
  </head>
  <body>
    <canvas id="topBanner" width="1000" height="140" style="border:1px solid #d3d3d3;">Your browser does not support the HTML5 canvas tag.</canvas>
    <canvas id="midBanner" width="1000" height="10" style="border:1px solid #d3d3d3;">Your browser does not support the HTML5 canvas tag.</canvas>
    <form method="POST">
      <input type="HIDDEN" name="uid" value="1" />
      <select name="cid">
        <option>Food
        <option>Clothing
        <option>Investments
        <option>House
        <option>Insurances
        <option>Loan
        <option>Energy
        <option>Culture
        <option>Car
        <option>Other Necessary
        <option>Other Unnecessary    
      </select>
      <input type="DATE" name="date" />
      <input type="TEXT" name="cost" /> 
      <input type="SUBMIT" name="postValues" value="Add data" />
    </form>
    <canvas id="bottomBanner" width="1000" height="40" style="border:1px solid #d3d3d3;">Your browser does not support the HTML5 canvas tag.</canvas>
  </body>
</html>