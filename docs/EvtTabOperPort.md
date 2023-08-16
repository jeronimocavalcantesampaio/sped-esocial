# EvtTabOperPort

## Evento
 *evtTabOperPort*

## Alias
 *S-1080 - Tabela de Operadores Portuários*


## Detalhamento



## Parâmetros
O stdClass deve ser carregado com os seguintes parâmetros:



## Modo de USO

```php
use NFePHP\eSocial\Event;

try {
    $std = new \stdClass();
    $evt = Event::evtTabOperPort($configJson, $std);
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
<eSocial xmlns="http://www.esocial.gov.br/schema/evt/evtTabOperPort/v02_02_01" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.esocial.gov.br/schema/evt/evtTabOperPort/v02_02_01 ../schemes/evtTabOperPort.xsd ">
  <evtTabOperPort Id="idvalue0">
    <ideEvento>
      <tpAmb>0</tpAmb>
      <procEmi>0</procEmi>
      <verProc>verProc</verProc>
    </ideEvento>
    <ideEmpregador>
      <tpInsc>0</tpInsc>
      <nrInsc>nrInsc</nrInsc>
    </ideEmpregador>
    <infoOperPortuario>
      <inclusao>
        <ideOperPortuario>
          <cnpjOpPortuario>cnpjOpPortuario</cnpjOpPortuario>
          <iniValid>iniValid</iniValid>
        </ideOperPortuario>
        <dadosOperPortuario>
          <aliqRat>0</aliqRat>
          <fap>0.0</fap>
          <aliqRatAjust>0.0</aliqRatAjust>
        </dadosOperPortuario>
      </inclusao>
    </infoOperPortuario>
  </evtTabOperPort>
  <Signature/>
</eSocial>

```
