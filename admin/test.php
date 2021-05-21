<script>
$(document).ready(function() {
    $('#attributeForm').bootstrapValidator();
});
</script>
<form id="attributeForm" method="post" class="form-horizontal"
      data-bv-message="This value is not valid"
      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
    <div class="form-group">
        <label class="col-sm-3 control-label">Nombre completo</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="firstName" placeholder="First name"
                   data-bv-notempty="true" data-bv-notempty-message="El nombre es obligatorio y no puede estar vacío" />
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="lastName" placeholder="Last name"
                   data-bv-notempty="true" data-bv-notempty-message="El apellido es obligatorio y no puede estar vacío" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Nombre de usuario</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="username"
                   data-bv-message="El nombre de usuario no es válido"
                   data-bv-notempty="true" data-bv-notempty-message="El nombre de usuario es obligatorio y no puede estar vacío"
                   data-bv-regexp="true" data-bv-regexp-regexp="^[a-zA-Z0-9_\.]+$" data-bv-regexp-message="El nombre de usuario solo puede constar de alfabético, número, punto y guión bajo"
                   data-bv-stringlength="true" data-bv-stringlength-min="6" data-bv-stringlength-max="30" data-bv-stringlength-message="El nombre de usuario debe tener más de 6 y menos de 30 caracteres."
                   data-bv-different="true" data-bv-different-field="password" data-bv-different-message="El nombre de usuario y la contraseña no pueden ser iguales" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Dirección de correo electrónico</label>
        <div class="col-sm-5">
            <input class="form-control" name="email" type="email"
                   data-bv-emailaddress="true" data-bv-emailaddress-message="The input is not a valid email address" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Contraseña</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" name="password"
                   data-bv-notempty="true" data-bv-notempty-message="La contraseña es obligatoria y no puede estar vacía"
                   data-bv-identical="true" data-bv-identical-field="confirmPassword" data-bv-identical-message="La contraseña y su confirmación no son lo mismo"
                   data-bv-different="true" data-bv-different-field="username" data-bv-different-message="La contraseña no puede ser la misma que el nombre de usuario." />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Vuelva a escribir la contraseña</label>
        <div class="col-sm-5">
            <input type="password" class="form-control" name="confirmPassword"
                   data-bv-notempty="true" data-bv-notempty-message="La contraseña de confirmación es obligatoria y no puede estar vacía"
                   data-bv-identical="true" data-bv-identical-field="password" data-bv-identical-message="La contraseña y su confirmación no son lo mismo"
                   data-bv-different="true" data-bv-different-field="username" data-bv-different-message="La contraseña no puede ser la misma que el nombre de usuario." />
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Idiomas</label>
        <div class="col-sm-5">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="english" data-bv-notempty="true" data-bv-message="Please specify at least one language you can speak" /> English
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="french" /> French
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="german" /> German
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="russian" /> Russian
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="other" /> Other
                </label>
            </div>
        </div>
    </div>
</form>