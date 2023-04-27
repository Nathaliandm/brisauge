<html>

<form action="processa_form.php" method="POST">

 <h2> Agendamento </h2>
      
      <h3> Confirmação de reserva de agendamento</h3>


  <label for="cliente">Nome Completo:</label>
  <input type="text" id="cliente" name="cliente" required><br>
  
  <label for="cpf">CPF:</label>
  <input type="text" id="cpf" name="cpf" pattern="^\d{3}\.\d{3}\.\d{3}-\d{2}$" required title="Por favor, insira um CPF válido (formato: XXX.XXX.XXX-XX)"><br>

  <label for="Rua">Rua:</label>
  <input type="text" id="Rua" name="Rua" required><br>
  
  <label for="Numero">Nº:</label>
  <input type="number" id="numero" name="Numero" required><br>

  <label for="telefone">Telefone:</label>
  <input type="tel" id="telefone" name="telefone" required><br><br>

  <label for="data principal">Data Principal:</label>
  <input type="date" id="data" name="datap" required><br>

  <label for="horario principal">Horário Principal:</label>
  <select id="horariop" name="horariop">
   
    <option value="07:00">07:00</option>
    <option value="08:00">08:00</option>
    <option value="09:00">09:00</option>
    <option value="10:00">10:00</option>
    <option value="11:00">11:00</option>
    <option value="12:00">12:00</option>
    <option value="13:00">13:00</option>
    <option value="14:00">14:00</option>
    <option value="15:00">15:00</option>
    <option value="16:00">16:00</option>
    <option value="17:00">17:00</option>
    <option value="18:00">18:00</option>
  </select><br><br>
  
   <label for="data secundaria">Data Secundária:</label>
  <input type="date" id="data" name="datas"><br>

  <label for="horario Secundário">Horário Secundario:</label>
  <select id="horarios" name="horarios">
   
    <option value="07:00">07:00</option>
    <option value="08:00">08:00</option>
    <option value="09:00">09:00</option>
    <option value="10:00">10:00</option>
    <option value="11:00">11:00</option>
    <option value="12:00">12:00</option>
    <option value="13:00">13:00</option>
    <option value="14:00">14:00</option>
    <option value="15:00">15:00</option>
    <option value="16:00">16:00</option>
    <option value="17:00">17:00</option>
    <option value="18:00">18:00</option><br> 
  </select><br><br>


  <input type="submit" value="Confirmar marcação">
</form>

        </html>
