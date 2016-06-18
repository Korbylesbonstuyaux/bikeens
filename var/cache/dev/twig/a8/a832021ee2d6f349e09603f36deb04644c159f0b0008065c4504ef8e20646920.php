<?php

/* BikeensPlatformBundle:Info:index.html.twig */
class __TwigTemplate_01eabcdd53b89491d2b93653c944946fa560818c34d13748966b60e75c4a95ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BikeensPlatformBundle::layout.html.twig", "BikeensPlatformBundle:Info:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bikeensplatform_body' => array($this, 'block_bikeensplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BikeensPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_368adcac579957473bf1533d9ba0ad088b03e443ad437b26f1bedb44b705fdae = $this->env->getExtension("native_profiler");
        $__internal_368adcac579957473bf1533d9ba0ad088b03e443ad437b26f1bedb44b705fdae->enter($__internal_368adcac579957473bf1533d9ba0ad088b03e443ad437b26f1bedb44b705fdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BikeensPlatformBundle:Info:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368adcac579957473bf1533d9ba0ad088b03e443ad437b26f1bedb44b705fdae->leave($__internal_368adcac579957473bf1533d9ba0ad088b03e443ad437b26f1bedb44b705fdae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_29ff090be52afb215e311322dff3c69d7bc5ff063b1a0385adcbc2d7a28ddf08 = $this->env->getExtension("native_profiler");
        $__internal_29ff090be52afb215e311322dff3c69d7bc5ff063b1a0385adcbc2d7a28ddf08->enter($__internal_29ff090be52afb215e311322dff3c69d7bc5ff063b1a0385adcbc2d7a28ddf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_29ff090be52afb215e311322dff3c69d7bc5ff063b1a0385adcbc2d7a28ddf08->leave($__internal_29ff090be52afb215e311322dff3c69d7bc5ff063b1a0385adcbc2d7a28ddf08_prof);

    }

    // line 9
    public function block_bikeensplatform_body($context, array $blocks = array())
    {
        $__internal_120916623b5a1ea10d892f482c145cb5db1a5d8b012903a77c905fe1ae79b054 = $this->env->getExtension("native_profiler");
        $__internal_120916623b5a1ea10d892f482c145cb5db1a5d8b012903a77c905fe1ae79b054->enter($__internal_120916623b5a1ea10d892f482c145cb5db1a5d8b012903a77c905fe1ae79b054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bikeensplatform_body"));

        // line 10
        echo "    <div id=\"have-bike\">
        <div class=\"container\">
            <h2>Vous possédez un vélo…</h2>
            <div class=\"info\">
                <p>
                    … mais vous ne l’utilisez pas tous les jours. <strong>Avez-vous pensé à lui donner une seconde vie et à le louer à un particulier proche de chez vous ?</strong>
                    Bikeens, service de location en ligne, vous aide à partager votre vélo en toute sécurité. Il ne vous reste plus qu’à prendre soin de lui, le bichonner, lui redonner une nouvelle jeunesse s’il le faut pour donner envie aux cyclistes d’adopter votre vélo pendant un jour ou même un mois !
                    <br>
                    <br>
                    Inscrivez votre vélo avant le lancement du service prévu début août tentez de gagner un vélo Arcade, des DVD de l’aventure Solidream, une sacoche double et plein d’autres lots (d’une valeur de plus de 1000 euros)*
                </p>
                <button>En savoir plus</button>
            </div>
            <div class=\"contest\">
                ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "61be012_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_61be012_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/61be012_Visuel-jeux-concours-4_1.png");
            // line 25
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Jeu Concours Bikeens\" />
                ";
        } else {
            // asset "61be012"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_61be012") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/61be012.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Jeu Concours Bikeens\" />
                ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "                <button>Je participe au jeu</button>
            </div>
        </div>
    </div>

    <div id=\"rent-bike\">
        <div class=\"container\">
            <h2>Comment louer mon vélo sur Bikeens ?</h2>
            <div class=\"step\">
                <div class=\"info\">
                    <span class=\"glyphicon glyphicon-check\"></span>
                    <br>
                    <strong class=\"title-step\">J’inscris mon vélo</strong>
                </div>
                <hr>
                <p>
                    Capacités, personnalité, surnom affectif, dites nous en plus sur lui !
                </p>
            </div>
            <div class=\"step\">
                <div class=\"info\">
                    <span class=\"glyphicon glyphicon-share-alt\"></span>
                    <br>
                    <strong class=\"title-step\">Je reçois une demande de location</strong>
                </div>
                <hr>
                <p>
                    Un particulier veut louer mon vélo, je dispose de 12 heures maximum pour accepter sa demande
                </p>
            </div>
            <div class=\"step\">
                <div class=\"info\">
                    <span class=\"glyphicon glyphicon-check\"></span>
                    <br>
                    <strong class=\"title-step\">Je loue mon vélo</strong>
                </div>
                <hr>
                <p>
                    Je rencontre le locataire, partage avec lui les bons plans sur les alentours et établis le contrat de location.
                </p>
            </div>
            <div class=\"step\">
                <div class=\"info\">
                    <span class=\"glyphicon glyphicon-check\"></span>
                    <br>
                    <strong class=\"title-step\">Je récupère l’argent</strong>
                </div>
                <hr>
                <p>
                    Après la location, je peux laisser un avis au locataire et virer l’argent sur mon compte bancaire.
                </p>
            </div>
        </div>
    </div>

    <div id=\"need-bike\">
        <div class=\"container\">
            <h2>
                Vous avez besoin d’un vélo ? Louez le !
            </h2>
            <div class=\"info\">
                <p>
                    <strong>Louez le vélo d’un particulier</strong> à tout moment, partout en France, pour une journée, quelques jours ou un mois !
                    <br>
                    <br>
                    Renseignez les dates et le lieu de location souhaités et trouvez les vélos disponibles ! Pour vous aider à faire votre choix parmi les milliers de vélos, un filtre est à votre disposition pour affiner votre recherche : type de vélo, prix maximum souhaité, accessoires prêtés…
                    <br>
                    Une fois le vélo trouvé, faites une <strong>demande de réservation</strong> auprès du loueur particulier en payant au préalable le prix de la location. Cependant, vous ne serez prélevé uniquement si le propriétaire accepte votre demande. Du début à la fin de la location, je suis lié au propriétaire du vélo via un contrat de location.
                    <br>
                    <br>
                    Ça y est vous pouvez vous déplacer librement avec votre monture, visiter et découvrir de nouveaux horizons. Bonne route !
                </p>
            </div>
            <div class=\"map\">
                ";
        // line 101
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "102cc8e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_102cc8e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/102cc8e_map-montpellier-Bikeens-430x344_1.png");
            // line 102
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Carte de Montpellier Bikeens\" />
                ";
        } else {
            // asset "102cc8e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_102cc8e") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/102cc8e.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Carte de Montpellier Bikeens\" />
                ";
        }
        unset($context["asset_url"]);
        // line 104
        echo "            </div>
        </div>
    </div>

    <div id=\"why-rent-bike\">
        <div class=\"container\">
            <h2>
                Pourquoi louer un vélo sur Bikeens ?
            </h2>
            <div class=\"step\">
                <div class=\"info\">
                    <span class=\"glyphicon glyphicon-check\"></span>
                    <br>
                    <strong class=\"title-step\">Simple</strong>
                </div>
                <hr>
                <p>
                    Trouvez le vélo qui vous correspond et réservez le en quelques secondes
                </p>
            </div>
            <div class=\"step\">
                <div class=\"info\">
                    <span class=\"glyphicon glyphicon-share-alt\"></span>
                    <br>
                    <strong class=\"title-step\">Collaboratif</strong>
                </div>
                <hr>
                <p>
                    Profitez du vélo d’un particulier et laisser votre avis sur l’expérience vécue
                </p>
            </div>
            <div class=\"step\">
                <div class=\"info\">
                    <span class=\"glyphicon glyphicon-check\"></span>
                    <br>
                    <strong class=\"title-step\">Sécurisé</strong>
                </div>
                <hr>
                <p>
                    Les transactions en ligne sont sécurisées et vous êtes assuré lorsque vous roulez
                </p>
            </div>
        </div>
    </div>

    <div id=\"security\">
        <div class=\"container\">
            <h2>
                La sécurité avant tout !
            </h2>
            <div class=\"info\">
                <div class=\"type\">
                    <div id=\"tenant\" class=\"selected\">
                        En tant que locataire
                    </div>
                    <div id=\"owner\">
                        En tant que propriétaire
                    </div>
                </div>
                <ul type=\"square\">
                    <li><strong>Roulez sereinement</strong>, vous êtes </strong>assurés en cas de casse ou vol</strong> du vélo jusqu’à 5 000 €. </li>
                    <li>Un <strong>système d’avis</strong> renforce la confiance entre les loueurs et locataires.</li>
                    <li>Vérifiez que le vélo dispose <strong>des éléments de sécurités obligatoires</strong> en bon état:</li>
                </ul>
                <span class=\"glyphicon glyphicon-ok\"></span> Deux freins, avant et arrière.
                <br>
                <span class=\"glyphicon glyphicon-ok\"></span> Un feu avant jaune ou blanc et un feu arrière rouge.
                <br>
                <span class=\"glyphicon glyphicon-ok\"></span> Un avertisseur sonore.
                <br>
                <span class=\"glyphicon glyphicon-ok\"></span> Des catadioptres (dispositifs rétro-réfléchissants) : de couleur rouge à l’arrière, de couleur blanche à l’avant, de couleur orange sur les côtés et sur les pédales.
                <br>
                <br>
                <ul type=\"square\">
                    <li>Pensez à <strong>respecter le code de la route</strong> et <strong>les autres usagers</strong> des voies empruntés (automobilistes, cyclistes, pietons, skateurs, etc.)</li>
                    <li>Pour plus de sécurité, nous vous recommandons le port du casque.</li>
                </ul>
            </div>
            <div class=\"partners\">
                <div>
                    <span>Nos partenaires qui assurent !</span>
                </div>
                ";
        // line 186
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e94056c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e94056c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/e94056c_logoMAIF_1.jpg");
            // line 187
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Logo Maif\" />
                ";
        } else {
            // asset "e94056c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e94056c") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/e94056c.jpg");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Logo Maif\" />
                ";
        }
        unset($context["asset_url"]);
        // line 189
        echo "                ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "35104e9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_35104e9_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/35104e9_logo-Mangopay_1.png");
            // line 190
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Logo Mangopay\" />
                ";
        } else {
            // asset "35104e9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_35104e9") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/35104e9.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Logo Mangopay\" />
                ";
        }
        unset($context["asset_url"]);
        // line 192
        echo "                <div>
                    <span>Assurance casse et vol des vélos en location</span>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_120916623b5a1ea10d892f482c145cb5db1a5d8b012903a77c905fe1ae79b054->leave($__internal_120916623b5a1ea10d892f482c145cb5db1a5d8b012903a77c905fe1ae79b054_prof);

    }

    public function getTemplateName()
    {
        return "BikeensPlatformBundle:Info:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 192,  292 => 190,  287 => 189,  273 => 187,  269 => 186,  185 => 104,  171 => 102,  167 => 101,  91 => 27,  77 => 25,  73 => 24,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/Bikeens/PlatformBundle/Resources/views/Info/index.html.twig #}*/
/* */
/* {% extends "BikeensPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block bikeensplatform_body %}*/
/*     <div id="have-bike">*/
/*         <div class="container">*/
/*             <h2>Vous possédez un vélo…</h2>*/
/*             <div class="info">*/
/*                 <p>*/
/*                     … mais vous ne l’utilisez pas tous les jours. <strong>Avez-vous pensé à lui donner une seconde vie et à le louer à un particulier proche de chez vous ?</strong>*/
/*                     Bikeens, service de location en ligne, vous aide à partager votre vélo en toute sécurité. Il ne vous reste plus qu’à prendre soin de lui, le bichonner, lui redonner une nouvelle jeunesse s’il le faut pour donner envie aux cyclistes d’adopter votre vélo pendant un jour ou même un mois !*/
/*                     <br>*/
/*                     <br>*/
/*                     Inscrivez votre vélo avant le lancement du service prévu début août tentez de gagner un vélo Arcade, des DVD de l’aventure Solidream, une sacoche double et plein d’autres lots (d’une valeur de plus de 1000 euros)**/
/*                 </p>*/
/*                 <button>En savoir plus</button>*/
/*             </div>*/
/*             <div class="contest">*/
/*                 {% image '@BikeensPlatformBundle/Resources/public/images/Visuel-jeux-concours-4.png' %}*/
/*                 <img src="{{ asset_url }}" alt="Jeu Concours Bikeens" />*/
/*                 {% endimage %}*/
/*                 <button>Je participe au jeu</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="rent-bike">*/
/*         <div class="container">*/
/*             <h2>Comment louer mon vélo sur Bikeens ?</h2>*/
/*             <div class="step">*/
/*                 <div class="info">*/
/*                     <span class="glyphicon glyphicon-check"></span>*/
/*                     <br>*/
/*                     <strong class="title-step">J’inscris mon vélo</strong>*/
/*                 </div>*/
/*                 <hr>*/
/*                 <p>*/
/*                     Capacités, personnalité, surnom affectif, dites nous en plus sur lui !*/
/*                 </p>*/
/*             </div>*/
/*             <div class="step">*/
/*                 <div class="info">*/
/*                     <span class="glyphicon glyphicon-share-alt"></span>*/
/*                     <br>*/
/*                     <strong class="title-step">Je reçois une demande de location</strong>*/
/*                 </div>*/
/*                 <hr>*/
/*                 <p>*/
/*                     Un particulier veut louer mon vélo, je dispose de 12 heures maximum pour accepter sa demande*/
/*                 </p>*/
/*             </div>*/
/*             <div class="step">*/
/*                 <div class="info">*/
/*                     <span class="glyphicon glyphicon-check"></span>*/
/*                     <br>*/
/*                     <strong class="title-step">Je loue mon vélo</strong>*/
/*                 </div>*/
/*                 <hr>*/
/*                 <p>*/
/*                     Je rencontre le locataire, partage avec lui les bons plans sur les alentours et établis le contrat de location.*/
/*                 </p>*/
/*             </div>*/
/*             <div class="step">*/
/*                 <div class="info">*/
/*                     <span class="glyphicon glyphicon-check"></span>*/
/*                     <br>*/
/*                     <strong class="title-step">Je récupère l’argent</strong>*/
/*                 </div>*/
/*                 <hr>*/
/*                 <p>*/
/*                     Après la location, je peux laisser un avis au locataire et virer l’argent sur mon compte bancaire.*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="need-bike">*/
/*         <div class="container">*/
/*             <h2>*/
/*                 Vous avez besoin d’un vélo ? Louez le !*/
/*             </h2>*/
/*             <div class="info">*/
/*                 <p>*/
/*                     <strong>Louez le vélo d’un particulier</strong> à tout moment, partout en France, pour une journée, quelques jours ou un mois !*/
/*                     <br>*/
/*                     <br>*/
/*                     Renseignez les dates et le lieu de location souhaités et trouvez les vélos disponibles ! Pour vous aider à faire votre choix parmi les milliers de vélos, un filtre est à votre disposition pour affiner votre recherche : type de vélo, prix maximum souhaité, accessoires prêtés…*/
/*                     <br>*/
/*                     Une fois le vélo trouvé, faites une <strong>demande de réservation</strong> auprès du loueur particulier en payant au préalable le prix de la location. Cependant, vous ne serez prélevé uniquement si le propriétaire accepte votre demande. Du début à la fin de la location, je suis lié au propriétaire du vélo via un contrat de location.*/
/*                     <br>*/
/*                     <br>*/
/*                     Ça y est vous pouvez vous déplacer librement avec votre monture, visiter et découvrir de nouveaux horizons. Bonne route !*/
/*                 </p>*/
/*             </div>*/
/*             <div class="map">*/
/*                 {% image '@BikeensPlatformBundle/Resources/public/images/map-montpellier-Bikeens-430x344.png' %}*/
/*                 <img src="{{ asset_url }}" alt="Carte de Montpellier Bikeens" />*/
/*                 {% endimage %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="why-rent-bike">*/
/*         <div class="container">*/
/*             <h2>*/
/*                 Pourquoi louer un vélo sur Bikeens ?*/
/*             </h2>*/
/*             <div class="step">*/
/*                 <div class="info">*/
/*                     <span class="glyphicon glyphicon-check"></span>*/
/*                     <br>*/
/*                     <strong class="title-step">Simple</strong>*/
/*                 </div>*/
/*                 <hr>*/
/*                 <p>*/
/*                     Trouvez le vélo qui vous correspond et réservez le en quelques secondes*/
/*                 </p>*/
/*             </div>*/
/*             <div class="step">*/
/*                 <div class="info">*/
/*                     <span class="glyphicon glyphicon-share-alt"></span>*/
/*                     <br>*/
/*                     <strong class="title-step">Collaboratif</strong>*/
/*                 </div>*/
/*                 <hr>*/
/*                 <p>*/
/*                     Profitez du vélo d’un particulier et laisser votre avis sur l’expérience vécue*/
/*                 </p>*/
/*             </div>*/
/*             <div class="step">*/
/*                 <div class="info">*/
/*                     <span class="glyphicon glyphicon-check"></span>*/
/*                     <br>*/
/*                     <strong class="title-step">Sécurisé</strong>*/
/*                 </div>*/
/*                 <hr>*/
/*                 <p>*/
/*                     Les transactions en ligne sont sécurisées et vous êtes assuré lorsque vous roulez*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="security">*/
/*         <div class="container">*/
/*             <h2>*/
/*                 La sécurité avant tout !*/
/*             </h2>*/
/*             <div class="info">*/
/*                 <div class="type">*/
/*                     <div id="tenant" class="selected">*/
/*                         En tant que locataire*/
/*                     </div>*/
/*                     <div id="owner">*/
/*                         En tant que propriétaire*/
/*                     </div>*/
/*                 </div>*/
/*                 <ul type="square">*/
/*                     <li><strong>Roulez sereinement</strong>, vous êtes </strong>assurés en cas de casse ou vol</strong> du vélo jusqu’à 5 000 €. </li>*/
/*                     <li>Un <strong>système d’avis</strong> renforce la confiance entre les loueurs et locataires.</li>*/
/*                     <li>Vérifiez que le vélo dispose <strong>des éléments de sécurités obligatoires</strong> en bon état:</li>*/
/*                 </ul>*/
/*                 <span class="glyphicon glyphicon-ok"></span> Deux freins, avant et arrière.*/
/*                 <br>*/
/*                 <span class="glyphicon glyphicon-ok"></span> Un feu avant jaune ou blanc et un feu arrière rouge.*/
/*                 <br>*/
/*                 <span class="glyphicon glyphicon-ok"></span> Un avertisseur sonore.*/
/*                 <br>*/
/*                 <span class="glyphicon glyphicon-ok"></span> Des catadioptres (dispositifs rétro-réfléchissants) : de couleur rouge à l’arrière, de couleur blanche à l’avant, de couleur orange sur les côtés et sur les pédales.*/
/*                 <br>*/
/*                 <br>*/
/*                 <ul type="square">*/
/*                     <li>Pensez à <strong>respecter le code de la route</strong> et <strong>les autres usagers</strong> des voies empruntés (automobilistes, cyclistes, pietons, skateurs, etc.)</li>*/
/*                     <li>Pour plus de sécurité, nous vous recommandons le port du casque.</li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="partners">*/
/*                 <div>*/
/*                     <span>Nos partenaires qui assurent !</span>*/
/*                 </div>*/
/*                 {% image '@BikeensPlatformBundle/Resources/public/images/logoMAIF.jpg' %}*/
/*                 <img src="{{ asset_url }}" alt="Logo Maif" />*/
/*                 {% endimage %}*/
/*                 {% image '@BikeensPlatformBundle/Resources/public/images/logo-Mangopay.png' %}*/
/*                 <img src="{{ asset_url }}" alt="Logo Mangopay" />*/
/*                 {% endimage %}*/
/*                 <div>*/
/*                     <span>Assurance casse et vol des vélos en location</span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
