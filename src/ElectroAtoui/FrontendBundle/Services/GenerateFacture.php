<?php
namespace ElectroAtoui\FrontendBundle\Services;

use Symfony\Component\DependencyInjection\ContainerInterface;


class GenerateFacture
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }


    public function generate($template, $data = array())
    {
        $html = $this->container->get('templating')->render(
            $template,
            $data
        );

        $html2pdf = $this->container->get('html2pdf_factory')->create();
        $html2pdf->pdf->SetAuthor('Electro el Atoui');
        $html2pdf->pdf->SetTitle('Facture');
        $html2pdf->pdf->SetSubject('Electro el Atoui');
        $html2pdf->pdf->SetKeywords('Electro el Atoui');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);

        return $html2pdf;
    }
}