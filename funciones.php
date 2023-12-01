<?php
function select_documentos($db) {
  $sql = "select td.id_tipodoc , td.nombre_tipo  from tipo_documentos td where id_estado =1 ";
  $result = $db->query($sql);
  $options = "<option value='' >Selecciona</option>";
  while ($row = $result->fetch_assoc()) {
    $options .= "<option value='" . $row["id_tipodoc"] . "'>" . $row["nombre_tipo"] . "</option>";
  }
  return "<select  id='select-documentos' name='select-documentos' required class='form-select form-control h-auto' >
            " . $options . "
          </select>";
}
// function select_documentos($db) {
//   $sql = "select td.id_tipodoc , td.nombre_tipo  from tipo_documentos td where id_estado =1 ";
//   $result = $db->query($sql);
//   $options = "<option value='' >Selecciona el tipo de Norma</option>";
//   while ($row = $result->fetch_assoc()) {
//     $options .= "<option value='" . $row["id_tipodoc"] . "'>" . $row["nombre_tipo"] . "</option>";
//   }
//   return "<select  id='select-documentos' name='select-documentos' required class='form-select form-select-solid' data-control='select2' data-hide-search='true' data-minimum-results-for-search='Infinity'>
//             " . $options . "
//           </select>";
// }
function select_tipodocumentos($db) {
    $sql = "select t.id_tipoarchivo, t.nombre_archivo  from tipo_archivomp t  where t.id_estado =1 ";
    $result = $db->query($sql);
    $options = "<option disabled selected>Selecciona</option>";
    while ($row = $result->fetch_assoc()) {
      $options .= "<option value='" . $row["id_tipoarchivo"] . "'>" . $row["nombre_archivo"] . "</option>";
    }
    
            return "<select id='tipodocumento' name='tipodocumento'>
        
            " . $options . "
          </select>";
}
//<option disabled selected>Selecciona un tipo de Documento</option>
// return "<select  id='select-documentos' name='select-documentos' required class='form-select form-select-solid' data-control='select2' data-hide-search='true' data-minimum-results-for-search='Infinity'>
//               " . $options . "
//             </select>";
?>