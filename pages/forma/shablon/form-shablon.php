<!--Коментарий-->
<section>
	<section>
	
		<div class="row">
			<div class="col"><h1>{content1}</h1></div>
			<div class="col">{content2}</div>
			<div class="col">
				<button type="submit" form="tdoc" class="btn btn-primary" style="float: right;">
					ОТПРАВИТЬ 
					<p>(например в базу данных или сгенерировать документ)</p>
				</button>
			</div>
		</div>
<!--
		<table>	
			<tbody>
				<tr>				
					<td><h1>{nameform}</h1></td>
					<td>{content}</td>
					<td><button type="submit" form="tdoc" class="btn btn-primary" style="float: right;">
						ОТПРАВИТЬ 
						<p>(например в базу данных или сгенерировать документ)</p>
					</button>
					</td>
				</tr>
			</tbody>
		</table>
-->		
	</section>
	
	<form id="tdoc" action="./" method="POST"> 
	<h3>{content3}</h3>
|	<details {attrs}>
		<summary><h5>{namegroup}</h5></summary>
<!--
|		<div class="row">
|			<div class="col">
|				<div class="placeholder-container">
				{tag} class="form-control" {attrs}>{tagend}
				<label class="form-label" for="{id}">{label}</label>
				{datalist}
				</div>
|			</div>
|		</div>
-->
|		<table><tbody><tr>
|		<td>
			<div class="placeholder-container">
|				{tag} class="form-control" {attrs}>{tagend}
				<label class="form-label" for="{id}">{label}</label>
				{datalist}
|			</div>
		</td>
|		</tr></tbody></table>

|	</details>
|	</form>	
</section>

<style>
section {
    width: 100%;
}    
</style>
