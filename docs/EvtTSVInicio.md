# EvtTSVInicio

## Evento
 *evtTSVInicio*

## Alias
 *S-2300 - Trabalhador Sem Vínculo de Emprego/Estatutário - Início*


## Detalhamento



## Parâmetros
O stdClass deve ser carregado com os seguintes parâmetros:



## Modo de USO

```php
use NFePHP\eSocial\Event;

try {
    $std = new \stdClass();
    $evt = Event::evtTSVInicio($configJson, $std);
} catch (\Exception $e) {
    //aqui você trata as exceptions
}
```

Onde:
- $std nesta variavel são inseridos os dados referentes ao evento, usando a mesma nomenclatura estabelecida no XSD ou descrita no manual.
- $configJson contêm as informações básicas da empresa [Config](Config.md).

A classe pode retornar: string XML, string JSON ou array com os dados


## Exemplo de XML

```xml
<?xml version="1.0" encoding="UTF-8"?>
<eSocial xmlns="http://www.esocial.gov.br/schema/evt/evtTSVInicio/v02_02_01" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.esocial.gov.br/schema/evt/evtTSVInicio/v02_02_01 ../schemes/evtTSVInicio.xsd ">
  <evtTSVInicio Id="idvalue0">
    <ideEvento>
      <indRetif>0</indRetif>
      <tpAmb>0</tpAmb>
      <procEmi>0</procEmi>
      <verProc>verProc</verProc>
    </ideEvento>
    <ideEmpregador>
      <tpInsc>0</tpInsc>
      <nrInsc>nrInsc</nrInsc>
    </ideEmpregador>
    <trabalhador>
      <cpfTrab>cpfTrab</cpfTrab>
      <nmTrab>nmTrab</nmTrab>
      <sexo>sexo</sexo>
      <racaCor>0</racaCor>
      <grauInstr>grauInstr</grauInstr>
      <nascimento>
        <dtNascto>2001-01-01</dtNascto>
        <paisNascto>paisNascto</paisNascto>
        <paisNac>paisNac</paisNac>
      </nascimento>
      <endereco>
        <brasil>
          <tpLograd>tpLograd</tpLograd>
          <dscLograd>dscLograd</dscLograd>
          <nrLograd>nrLograd</nrLograd>
          <cep>cep</cep>
          <codMunic>0</codMunic>
          <uf>AC</uf>
        </brasil>
      </endereco>
    </trabalhador>
    <infoTSVInicio>
      <codCateg>0</codCateg>
      <dtInicio>2001-01-01</dtInicio>
    </infoTSVInicio>
  </evtTSVInicio>
  <Signature/>
</eSocial>

```
