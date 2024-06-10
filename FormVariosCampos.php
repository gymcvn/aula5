<!DOCTYPE html>
<html>
    <body>
        <form id="formCadastro" name="formCadastro" method="POST" action="recebereform.php">

        <!-- Radio Button -->
         <b>Qual seu sistema operacional?</b><br>
         <input type=radio name=sistema value="Windows 8.1"> Win98 <br>
         <input type=radio name=sistema value="Windows 10"> Win XP <br>
         <input type=radio name=sistema value="Linux"> Linux <br>
         <input type=radio name=sistema value="Mac"> Mac <br><br>

         <!-- Checkbox -->
          <b>Escolha os numeros de sua preferência</b><br>
          <input type="checkbox" name="numeros[]" value=10> 10 <br>
          <input type="checkbox" name="numeros[]" value="100"> 100 <br>
          <input type="checkbox" name="numeros[]" value="1000"> 1000 <br>

          <!-- Dropdown list -->
           <b>Qual seu processador?</b><br>
           <select name="processador">
            <option value=Pentium>Pentium</option>
            <option value=AMD> AMD</option>
            <option value=Celeron>Celeron</option>
           </select><BR><BR>

           <input id="botaoEnviar" type="submit" value="Enviar">
        </form>
    </body>
</html>
         