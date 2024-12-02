<label class="control-label col-lg-3 req" for="userPassword">[{oxmultilang ident="PASSWORD"}]</label>
<div class="col-lg-9">
    <input id="userPassword" class="form-control textbox " type="password" name="lgn_pwd" value="[{$lgn_pwd}]">
    <div class="help-block"></div>
    <div id="pswd_info">
        <h4>[{oxmultilang ident="PASSWORD_REQUIREMENT"}]</h4>
        <ul>
            <li id="letter" class="invalid"><i class="fas fa-times"></i><i class="fas fa-check"></i>[{oxmultilang ident="LEAST_ONE_LETTER"}]</li>
            <li id="capital" class="invalid"><i class="fas fa-times"></i><i class="fas fa-check"></i>[{oxmultilang ident="LEAST_ONE_CAPITAL"}]</li>
            <li id="number" class="invalid"><i class="fas fa-times"></i><i class="fas fa-check"></i>[{oxmultilang ident="LEAST_ONE_NUMBER"}]</li>
            <li id="length" class="invalid"><i class="fas fa-times"></i><i class="fas fa-check"></i>[{oxmultilang ident="LEAST_EIGHT_CHAR"}]</li>
        </ul>
    </div>
</div>
[{oxstyle include=$oViewConf->mcGetModuleStylePath("pwconditions","oxid_pwconditions.css")}]
[{oxscript include=$oViewConf->mcGetModuleJsPath("pwconditions","oxid_pwconditions.js")}]
