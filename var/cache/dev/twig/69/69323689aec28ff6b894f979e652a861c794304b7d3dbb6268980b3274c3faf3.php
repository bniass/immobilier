<?php

/* SNTImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_0e6052c1ab779c25428d8084fa1fbbd8f8ba63480bf1746fa6150109278fd873 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SNTImmobilierBundle:Front:search_bien.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d728ef53dcd70e497ffd710a023d5d9516a242ac3d10e999b67b3d253dc54f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d728ef53dcd70e497ffd710a023d5d9516a242ac3d10e999b67b3d253dc54f59->enter($__internal_d728ef53dcd70e497ffd710a023d5d9516a242ac3d10e999b67b3d253dc54f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_d57e4adabcbecb764981e04013731c508ab4ec433161632257e8d7c62cfd1893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57e4adabcbecb764981e04013731c508ab4ec433161632257e8d7c62cfd1893->enter($__internal_d57e4adabcbecb764981e04013731c508ab4ec433161632257e8d7c62cfd1893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d728ef53dcd70e497ffd710a023d5d9516a242ac3d10e999b67b3d253dc54f59->leave($__internal_d728ef53dcd70e497ffd710a023d5d9516a242ac3d10e999b67b3d253dc54f59_prof);

        
        $__internal_d57e4adabcbecb764981e04013731c508ab4ec433161632257e8d7c62cfd1893->leave($__internal_d57e4adabcbecb764981e04013731c508ab4ec433161632257e8d7c62cfd1893_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f937fde3a8ce8bc943f0ad9d4707cea5d1cb2b0f2670d3f43c8083e3115aa13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f937fde3a8ce8bc943f0ad9d4707cea5d1cb2b0f2670d3f43c8083e3115aa13->enter($__internal_0f937fde3a8ce8bc943f0ad9d4707cea5d1cb2b0f2670d3f43c8083e3115aa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3437d1f290cb3c307994a0e061eb95897c246dfb6006188c9ccdd62ec5b06468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3437d1f290cb3c307994a0e061eb95897c246dfb6006188c9ccdd62ec5b06468->enter($__internal_3437d1f290cb3c307994a0e061eb95897c246dfb6006188c9ccdd62ec5b06468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_3437d1f290cb3c307994a0e061eb95897c246dfb6006188c9ccdd62ec5b06468->leave($__internal_3437d1f290cb3c307994a0e061eb95897c246dfb6006188c9ccdd62ec5b06468_prof);

        
        $__internal_0f937fde3a8ce8bc943f0ad9d4707cea5d1cb2b0f2670d3f43c8083e3115aa13->leave($__internal_0f937fde3a8ce8bc943f0ad9d4707cea5d1cb2b0f2670d3f43c8083e3115aa13_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1da5aeda85aee6aee1d5e18a80e0909658545eb160eeb5d27e8ba284e4adb304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da5aeda85aee6aee1d5e18a80e0909658545eb160eeb5d27e8ba284e4adb304->enter($__internal_1da5aeda85aee6aee1d5e18a80e0909658545eb160eeb5d27e8ba284e4adb304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83ad132dd23b34f6f3ab110001049060fc66763c04b26d306bbbb0c21727a91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ad132dd23b34f6f3ab110001049060fc66763c04b26d306bbbb0c21727a91d->enter($__internal_83ad132dd23b34f6f3ab110001049060fc66763c04b26d306bbbb0c21727a91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SNTImmobilierBundle:Front:searchBien";
        
        $__internal_83ad132dd23b34f6f3ab110001049060fc66763c04b26d306bbbb0c21727a91d->leave($__internal_83ad132dd23b34f6f3ab110001049060fc66763c04b26d306bbbb0c21727a91d_prof);

        
        $__internal_1da5aeda85aee6aee1d5e18a80e0909658545eb160eeb5d27e8ba284e4adb304->leave($__internal_1da5aeda85aee6aee1d5e18a80e0909658545eb160eeb5d27e8ba284e4adb304_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_177cadd862617f02d4013b31be29ea7fa6267a1357380d770b9cbb1d76281e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177cadd862617f02d4013b31be29ea7fa6267a1357380d770b9cbb1d76281e27->enter($__internal_177cadd862617f02d4013b31be29ea7fa6267a1357380d770b9cbb1d76281e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7d4f227416919d7432642d6fc91aba9314c30d7ca7a4a3db9e3cae363e07a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d4f227416919d7432642d6fc91aba9314c30d7ca7a4a3db9e3cae363e07a5d->enter($__internal_f7d4f227416919d7432642d6fc91aba9314c30d7ca7a4a3db9e3cae363e07a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<form method=\"post\">
        <h2>Rechercher un bien immobilier</h2>
            <div>
            <select class=\"col-md-3\" name=\"localiteselect\" id=\"localiteselect\">
            <option value=\"0\">------selectionner la localité-----</option>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 15
            echo "               ";
            if (($this->getAttribute($context["localite"], "id", array()) == ($context["loc"] ?? $this->getContext($context, "loc")))) {
                // line 16
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
                echo "\" selected=\"true\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
                echo "</option>
               ";
            } else {
                // line 18
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
                echo "</option>
               ";
            }
            // line 20
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </select>
        
            <select class=\"col-md-3\" name=\"typeselect\" id=\"typeselect\">
            <option value=\"0\">----selectionner le type de bien---</option>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 27
            echo "                ";
            if (($this->getAttribute($context["type"], "id", array()) == ($context["typeBien"] ?? $this->getContext($context, "typeBien")))) {
                // line 28
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
                echo "\" selected=\"true\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
                echo "</option>
                ";
            } else {
                // line 30
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
                echo "</option>
               ";
            }
            // line 32
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </select>
        
            <input type=\"number\" placeholder=\"saisir un prix\" class=\"col-md-2\" name=\"prix\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["prix"] ?? $this->getContext($context, "prix")), "html", null, true);
        echo "\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </form>
    <br/>
    ";
        // line 40
        if ((twig_length_filter($this->env, ($context["biens"] ?? $this->getContext($context, "biens"))) > 0)) {
            // line 41
            echo "    <div class=\"count\">
    Nombre de bien(s) trouvé(s) : ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "getTotalItemCount", array()), "html", null, true);
            echo "
    </div>
    <table>
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["biens"] ?? $this->getContext($context, "biens"))) - 1)));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                echo "                   ";
                if ((($context["i"] % 3) == 0)) {
                    // line 47
                    echo "                        <tr>
                   ";
                }
                // line 49
                echo "                
                   <td>
                        <img src=\"data:image/jpeg;base64,";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), $context["i"], array(), "array"), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
                echo "\" style=\"width:200px;height:200px;\"  /><br/>
                        ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), $context["i"], array(), "array"), "nomBien", array()), "html", null, true);
                echo "
                   </td>
                   ";
                // line 54
                if (((($context["i"] + 1) % 3) == 0)) {
                    // line 55
                    echo "                        </tr>
                   ";
                }
                // line 57
                echo "                   
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 59
                echo "            <tr>
                <td colspan=\"5\">";
                // line 60
                echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    </table>
   ";
            // line 65
            echo "    <div class=\"navigation\">
        ";
            // line 66
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["biens"] ?? $this->getContext($context, "biens")));
            echo "
    </div>
    ";
        } else {
            // line 69
            echo "            ";
            echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f7d4f227416919d7432642d6fc91aba9314c30d7ca7a4a3db9e3cae363e07a5d->leave($__internal_f7d4f227416919d7432642d6fc91aba9314c30d7ca7a4a3db9e3cae363e07a5d_prof);

        
        $__internal_177cadd862617f02d4013b31be29ea7fa6267a1357380d770b9cbb1d76281e27->leave($__internal_177cadd862617f02d4013b31be29ea7fa6267a1357380d770b9cbb1d76281e27_prof);

    }

    public function getTemplateName()
    {
        return "SNTImmobilierBundle:Front:search_bien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 69,  242 => 66,  239 => 65,  236 => 63,  227 => 60,  224 => 59,  218 => 57,  214 => 55,  212 => 54,  207 => 52,  203 => 51,  199 => 49,  195 => 47,  192 => 46,  187 => 45,  181 => 42,  178 => 41,  176 => 40,  168 => 35,  164 => 33,  158 => 32,  150 => 30,  142 => 28,  139 => 27,  135 => 26,  129 => 22,  122 => 20,  114 => 18,  106 => 16,  103 => 15,  99 => 14,  92 => 9,  83 => 8,  65 => 6,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('dist/css/bootstrap.min.css') }}\" />

{% endblock %}
{% block title %}SNTImmobilierBundle:Front:searchBien{% endblock %}

{% block body %}
<form method=\"post\">
        <h2>Rechercher un bien immobilier</h2>
            <div>
            <select class=\"col-md-3\" name=\"localiteselect\" id=\"localiteselect\">
            <option value=\"0\">------selectionner la localité-----</option>
            {% for localite in localites %}
               {% if localite.id == loc %}
                    <option value=\"{{localite.id}}\" selected=\"true\">{{localite.libelle}}</option>
               {% else %}
                    <option value=\"{{localite.id}}\">{{localite.libelle}}</option>
               {% endif %}

            {% endfor %}
            </select>
        
            <select class=\"col-md-3\" name=\"typeselect\" id=\"typeselect\">
            <option value=\"0\">----selectionner le type de bien---</option>
            {% for type in types %}
                {% if type.id == typeBien %}
                    <option value=\"{{type.id}}\" selected=\"true\">{{type.libelle}}</option>
                {% else %}
                    <option value=\"{{type.id}}\">{{type.libelle}}</option>
               {% endif %}
            {% endfor %}
            </select>
        
            <input type=\"number\" placeholder=\"saisir un prix\" class=\"col-md-2\" name=\"prix\" value=\"{{prix}}\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </form>
    <br/>
    {%  if biens|length > 0 %}
    <div class=\"count\">
    Nombre de bien(s) trouvé(s) : {{ biens.getTotalItemCount }}
    </div>
    <table>
        {% for i in 0..biens|length-1 %}
                   {%  if i%3 == 0 %}
                        <tr>
                   {%  endif %}
                
                   <td>
                        <img src=\"data:image/jpeg;base64,{{biens[i].images[0].image}}\" style=\"width:200px;height:200px;\"  /><br/>
                        {{biens[i].nomBien}}
                   </td>
                   {%  if (i+1)%3 == 0 %}
                        </tr>
                   {%  endif %}
                   
        {% else %}
            <tr>
                <td colspan=\"5\">{{message}}</td>
            </tr>
        {% endfor %}
    </table>
   {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(biens) }}
    </div>
    {% else %}
            {{message}}
    {% endif %}
{% endblock %}
", "SNTImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/immobilier/src/SNT/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
    }
}
