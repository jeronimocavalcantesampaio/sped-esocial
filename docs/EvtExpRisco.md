# EvtExpRisco

## Evento
 *evtExpRisco*

## Alias
 *S-2240 - Condições Ambientais do Trabalho - Fatores de Risco*


## Detalhamento



## Parâmetros
O stdClass deve ser carregado com os seguintes parâmetros:



## Modo de USO

```php
use NFePHP\eSocial\Event;

try {
    $std = new \stdClass();
    $evt = Event::evtExpRisco($configJson, $std);
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
<eSocial xmlns="http://www.esocial.gov.br/schema/evt/evtExpRisco/v02_02_01" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.esocial.gov.br/schema/evt/evtExpRisco/v02_02_01 ../schemes/evtExpRisco.xsd ">
  <evtExpRisco Id="idvalue0">
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
    <ideVinculo>
      <cpfTrab>cpfTrab</cpfTrab>
    </ideVinculo>
    <infoExpRisco>
      <respReg>
        <dtIni>2001-01-01</dtIni>
        <nisResp>nisResp</nisResp>
        <nrOc>nrOc</nrOc>
      </respReg>
    </infoExpRisco>
  </evtExpRisco>
  <Signature/>
</eSocial>

```
