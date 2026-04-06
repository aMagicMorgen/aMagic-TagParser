<div id='boxForm'>
  <h2 id='title'>{content1}</h2>
     <center><h6>{content2}</h6></center>	
  <form>
|	<details {attrs}>
		<summary><h5>{namegroup}</h5></summary>
|		<div class="row">
|			<div class="col">
				<div class="placeholder-container">
|				{tag} class="form-control" {attrs}>{tagend}
				<label class="form-label" for="{id}">{label}</label>
				{datalist}
				</div>
|			</div>
|		</div>
|	</details>
|	<br>
	<p>{content3}</p>
    <input class='button' type='submit' value='Connection'>
  </form>
</div>

<style> 
@import url(https://fonts.googleapis.com/css?family=Montserrat);
@import url(https://fonts.googleapis.com/css?family=Nothing+You+Could+Do);/* Google font */


body
{
  background-color:rgba(255, 203, 96,0.5);
}
#boxForm
{
  background-color:rgb(255, 203, 96);
  #width:340px;
  
  
  position:relative;
  #left:50vw;
  #margin-left:-170px;
  box-shadow:1px 1px 8px rgba(244, 102, 27,1);
}
table {
	width: 100%;
	table-layout: auto;
  #border-collapse: separate;
  border-spacing: 0px 0;
  margin:0 10px 0 10px
}
.placeholder-container input, .placeholder-container textarea {
    background-color: #FFF;
    border: 2px solid #BFE2FF;
    border-radius: 10px;
    box-sizing: border-box;
    color: #000;
    font-size: 16px;
    line-height: 16px;
    height: 32px;
    outline: 0;
    padding: 0 20px;
    width: 100%;
}
#boxForm #title
{
  font-family: 'Nothing You Could Do', cursive;
  font-weight:bold;
  text-align:center;
  padding-top:30px;
}

#boxForm form
{
  margin-top:20px;
  text-align:center;
}
/*
.form-control
{
  padding:10px;
  width:250px;
  margin-top:10px;
  border-style:none;
  border-bottom-style:solid;
  border-color:rgb(244, 102, 27);
  font-family: 'Montserrat', sans-serif;
  font-size:15px;
  color:rgb(244, 102, 27);
  background-color:rgb(255, 203, 96);
}
*/
.form-control:focus
{
  background-color:rgba(255,255,255,0.2);
  border-style:none;
  outline: none; /* to delete blue outline*/
}

#pwd
{
  margin-bottom:5px;
}

/* Custom  placeholder */

::-webkit-input-placeholder { color:rgb(244, 102, 27);font-weight:bold;font-size:16px; }
::-moz-placeholder { color:rgb(244, 102, 27); font-weight:bold;font-size:16px; } /* firefox 19+ */
:-ms-input-placeholder { color:rgb(244, 102, 27);font-weight:bold;font-size:16px; } /* ie */
input:-moz-placeholder { color:rgb(244, 102, 27); font-weight:bold;font-size:16px; }

#rememberMe
{
  float:left;
  margin-left:40px;
}

form label
{
  float:left;
  margin-left:5px;
  color:rgb(244, 102, 27);
  font-family: 'Montserrat', sans-serif;
  font-size:12px;
}

#pwd
{
  margin-bottom:15px;
}

.button
{
  padding:10px;
  width:150px;
  
  /* Background par colorzilla.com */
  background: rgb(255,175,75); /* Old browsers */
background: -moz-linear-gradient(top, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,175,75,1)), color-stop(100%,rgba(255,146,10,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(255,175,75,1) 0%,rgba(255,146,10,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(255,175,75,1) 0%,rgba(255,146,10,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(255,175,75,1) 0%,rgba(255,146,10,1) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(255,175,75,1) 0%,rgba(255,146,10,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffaf4b', endColorstr='#ff920a',GradientType=0 ); /* IE6-9 */

  font-family: 'Montserrat', sans-serif;
  
  font-size:15px;
  border-style:none;
  box-shadow:1px 1px rgba(244, 102, 27,1);
  cursor:pointer;
  
  color:white;
  font-weight:bold;
  margin:20px;
  margin-left:-28px;
}

</style>