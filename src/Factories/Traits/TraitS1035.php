<?php

namespace NFePHP\eSocial\Factories\Traits;

trait TraitS1035
{
    /**
     * builder for version 2.5.0
     */
    protected function toNode250()
    {
        $ideEmpregador = $this->node->getElementsByTagName('ideEmpregador')->item(0);
        //o idEvento pode variar de evento para evento
        //então cada factory individualmente terá de construir o seu
        $ideEvento = $this->dom->createElement("ideEvento");
        $this->dom->addChild(
            $ideEvento,
            "tpAmb",
            $this->tpAmb,
            true
        );
        $this->dom->addChild(
            $ideEvento,
            "procEmi",
            $this->procEmi,
            true
        );
        $this->dom->addChild(
            $ideEvento,
            "verProc",
            $this->verProc,
            true
        );
        $this->node->insertBefore($ideEvento, $ideEmpregador);

        $ide = $this->dom->createElement("ideCarreira");
        $this->dom->addChild(
            $ide,
            "codCarreira",
            $this->std->codcarreira,
            true
        );
        $this->dom->addChild(
            $ide,
            "iniValid",
            $this->std->inivalid,
            true
        );
        $this->dom->addChild(
            $ide,
            "fimValid",
            !empty($this->std->fimvalid) ? $this->std->fimvalid : null,
            false
        );
        if (!empty($this->std->dadoscarreira)) {
            $da = $this->std->dadoscarreira;
            $dados = $this->dom->createElement("dadosCarreira");
            $this->dom->addChild(
                $dados,
                "dscCarreira",
                $da->dsccarreira,
                true
            );
            $this->dom->addChild(
                $dados,
                "leiCarr",
                !empty($da->leicarr) ? $da->leicarr : null,
                false
            );
            $this->dom->addChild(
                $dados,
                "dtLeiCarr",
                $da->dtleicarr,
                true
            );
            $this->dom->addChild(
                $dados,
                "sitCarr",
                $da->sitcarr,
                true
            );
        }
        if (!empty($this->std->novavalidade)) {
            $nova = $this->dom->createElement("novaValidade");
            $this->dom->addChild(
                $nova,
                "iniValid",
                $this->std->novavalidade->inivalid,
                true
            );
            $this->dom->addChild(
                $nova,
                "fimValid",
                ! empty($this->std->novavalidade->fimvalid)
                    ? $this->std->novavalidade->fimvalid
                    : null,
                false
            );
        }
        $info = $this->dom->createElement("infoCarreira");
        //seleção do modo
        if ($this->std->modo == 'INC') {
            $node = $this->dom->createElement("inclusao");
            $node->appendChild($ide);
            $node->appendChild($dados);
        } elseif ($this->std->modo == 'ALT') {
            $node = $this->dom->createElement("alteracao");
            $node->appendChild($ide);
            $node->appendChild($dados);
            if (isset($nova)) {
                $node->appendChild($nova);
            }
        } else {
            $node = $this->dom->createElement("exclusao");
            $node->appendChild($ide);
        }
        $info->appendChild($node);
        $this->node->appendChild($info);
        $this->eSocial->appendChild($this->node);
        //$this->xml = $this->dom->saveXML($this->eSocial);
        $this->sign();
    }

    /**
     * builder for version S.1.0.0
     */
    protected function toNodeS100()
    {
        throw new \Exception("NÃO EXISTE EVENTO {$this->evtAlias} na versão S_1.0 !!");
    }

    /**
     * builder for version S.1.1.0
     */
    protected function toNodeS110()
    {
        return $this->toNodeS100();
    }
}
