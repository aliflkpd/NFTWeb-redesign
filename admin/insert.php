<?php
include "header.php"
?>
       
  <div class="card">
  
    <a>Produk Baru</a>
    <table>
    <form action="index.php" method="post" enctype="multipart/form-data">
             <tr>
            <input type="text" name="nft" value="insert"></tr>
		    <tr>
				<td>foto nft </td>
				<td style = "position: relative; left: 50px;"><input type="file" name="image"></td>					
			</tr>	
			<tr>
				<td>nama nft</td>
				<td><input type="text" name="title"></td>				
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>			
			</tr>
    </form>		
	</table> 
    </div>
   
