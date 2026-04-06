<form>
  <h1>{content1}</h1>
	<h5>{content2}</h5>	
|	<details {attrs}>
		<summary><h5>{namegroup}</h5></summary>
|		<div class="row">
|			<div class="col">
				<div class="placeholder-container">
|				<label class="form-label" for="{id}">{label}</label>
				{tag} class="form-control" {attrs}>{tagend}
				{datalist}
				</div>
|			</div>
|		</div>
|	</details>
|  {content3}
  <button>Submit</button>
</form>



<style> 
.transition, form button, form .placeholder-container label, form .placeholder-container input {
  -moz-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
  -o-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
  -webkit-transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
  transition: all 0.25s cubic-bezier(0.53, 0.01, 0.35, 1.5);
}

* {
  font-family: Helvetica, sans-serif;
  font-weight: light;
  -webkit-font-smoothing: antialiased;
}

html {
  background-color: #ff4a56;
}

form {
  position: relative;
  display: inline-block;
  max-width: 700px;
  min-width: 500px;
  box-sizing: border-box;
  padding: 30px 25px;
  background-color: white;
  border-radius: 40px;
  margin: 40px 0;
  left: 50%;
  -moz-transform: translate(-50%, 0);
  -ms-transform: translate(-50%, 0);
  -webkit-transform: translate(-50%, 0);
  transform: translate(-50%, 0);
}
form h1 {
  color: #ff4a56;
  font-weight: 100;
  letter-spacing: 0.01em;
  margin-left: 15px;
  margin-bottom: 35px;
  text-transform: uppercase;
}
form button {
  margin-top: 35px;
  background-color: white;
  border: 1px solid #ff4a56;
  line-height: 0;
  font-size: 17px;
  display: inline-block;
  box-sizing: border-box;
  padding: 20px 15px;
  border-radius: 60px;
  color: #ff4a56;
  font-weight: 100;
  letter-spacing: 0.01em;
  position: relative;
  z-index: 1;
}
form button:hover, form button:focus {
  color: white;
  background-color: #ff4a56;
}
form table {
	width: 100%;
	table-layout: auto;
  #border-collapse: separate;
  border-spacing: 0px 0;
  margin:0 10px 0 10px
}

form .placeholder-container {
  position: relative;
  padding: 10px 0;
}
form .placeholder-container:first-of-type {
  padding-top: 0;
}
form .placeholder-container:last-of-type {
  padding-bottom: 0;
}
form .placeholder-container label {
  transform-origin: left center;
  color: #ff4a56;
  font-weight: 100;
  letter-spacing: 0.01em;
  font-size: 17px;
  box-sizing: border-box;
  padding: 10px 15px;
  display: block;
  position: absolute;
  margin-top: -40px;
  z-index: 2;
  pointer-events: none;
}
form .placeholder-container input {
  appearance: none;
  background-color: none;
  border: 1px solid #ff4a56;
  line-height: 0;
  font-size: 17px;
  width: 100%;
  display: block;
  box-sizing: border-box;
  padding: 10px 15px;
  border-radius: 60px;
  #color: #ff4a56;
  font-weight: 100;
  letter-spacing: 0.01em;
  position: relative;
  z-index: 1;
}
form .placeholder-container input:focus {
  outline: none;
  background: #ff4a56;
  color: white;
  margin-top: 30px;
}
form .placeholder-container input:valid {
  margin-top: 20px;
}
form .placeholder-container input:focus ~ label {
  -moz-transform: translate(0, -35px);
  -ms-transform: translate(0, -35px);
  -webkit-transform: translate(0, -35px);
  transform: translate(0, -35px);
}
form .placeholder-container input:valid ~ label {
  text-transform: uppercase;
  font-style: italic;
  -moz-transform: translate(5px, -35px) scale(0.6);
  -ms-transform: translate(5px, -35px) scale(0.6);
  -webkit-transform: translate(5px, -35px) scale(0.6);
  transform: translate(2px, 34px) scale(0.6);
}
</style>