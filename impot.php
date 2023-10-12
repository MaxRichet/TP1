<?php
class Impot {
    const TAUX_INF_15000 = 0.15;
    const TAUX_SUP_15000 = 0.20;
    const SEUIL = 15000;
    private $nom;
    private $revenu;

    public function __construct($nom, $revenu) {
        $this->nom = $nom;
        $this->revenu = $revenu;
    }

    public function CalculImpot() {
        if ($this->revenu <= 15000) {
            return $this->revenu * self::TAUX_INF_15000;
        } else {
            return (($this->revenu - self::SEUIL) * self::TAUX_SUP_15000) + (self::SEUIL * self::TAUX_INF_15000);
        }
    }

    public function AfficheImpot() {
        $impot = $this->CalculImpot();
        return "Monsieur {$this->nom}, votre impôt est de {$impot} euros.";
    }
}
?>