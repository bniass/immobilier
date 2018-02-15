<?php

/* SNTImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_e2759678cdce8b136844ad0baab1deb205782d095a4e076459f23fd92783d8a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SNTImmobilierBundle:Front:search_bien.html.twig", 1);
        $this->blocks = array(
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
        $__internal_23173a72c11e82d7605430db030a59f1491b550577fc5bfdde3b5d0f4f46e588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23173a72c11e82d7605430db030a59f1491b550577fc5bfdde3b5d0f4f46e588->enter($__internal_23173a72c11e82d7605430db030a59f1491b550577fc5bfdde3b5d0f4f46e588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_0ed92bd566ac98f71fb97298a21d9cdf50eb21a2e49d2fb7504a4a69933f343c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed92bd566ac98f71fb97298a21d9cdf50eb21a2e49d2fb7504a4a69933f343c->enter($__internal_0ed92bd566ac98f71fb97298a21d9cdf50eb21a2e49d2fb7504a4a69933f343c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23173a72c11e82d7605430db030a59f1491b550577fc5bfdde3b5d0f4f46e588->leave($__internal_23173a72c11e82d7605430db030a59f1491b550577fc5bfdde3b5d0f4f46e588_prof);

        
        $__internal_0ed92bd566ac98f71fb97298a21d9cdf50eb21a2e49d2fb7504a4a69933f343c->leave($__internal_0ed92bd566ac98f71fb97298a21d9cdf50eb21a2e49d2fb7504a4a69933f343c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1b90019c532f74b579ec8850e6115e3a465605ed7c46bd65b76c1041823482a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b90019c532f74b579ec8850e6115e3a465605ed7c46bd65b76c1041823482a->enter($__internal_c1b90019c532f74b579ec8850e6115e3a465605ed7c46bd65b76c1041823482a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c50bb14cd832aedc0b68dd27af811fcac785aeb7f33a16b466c0d13da825e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c50bb14cd832aedc0b68dd27af811fcac785aeb7f33a16b466c0d13da825e55->enter($__internal_0c50bb14cd832aedc0b68dd27af811fcac785aeb7f33a16b466c0d13da825e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SNTImmobilierBundle:Front:searchBien";
        
        $__internal_0c50bb14cd832aedc0b68dd27af811fcac785aeb7f33a16b466c0d13da825e55->leave($__internal_0c50bb14cd832aedc0b68dd27af811fcac785aeb7f33a16b466c0d13da825e55_prof);

        
        $__internal_c1b90019c532f74b579ec8850e6115e3a465605ed7c46bd65b76c1041823482a->leave($__internal_c1b90019c532f74b579ec8850e6115e3a465605ed7c46bd65b76c1041823482a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71570b6b4200d4005d79bbfe4e85ca75f91d53aad4de6dd42cf545b8bed05fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71570b6b4200d4005d79bbfe4e85ca75f91d53aad4de6dd42cf545b8bed05fb6->enter($__internal_71570b6b4200d4005d79bbfe4e85ca75f91d53aad4de6dd42cf545b8bed05fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17bb6c6a59d33dad968f358d6d1f534dca62468217e3a707bf5b41e8a8558d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bb6c6a59d33dad968f358d6d1f534dca62468217e3a707bf5b41e8a8558d23->enter($__internal_17bb6c6a59d33dad968f358d6d1f534dca62468217e3a707bf5b41e8a8558d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<form method=\"post\">
        <div class=\"form-group\">
            <label for=\"localiteselect\">Localité</label>
            <select class=\"form-control col-md-4\" name=\"localiteselect\" id=\"localiteselect\">
            <option value=\"0\">------selectionner la localité-----</option>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 12
            echo "               ";
            if (($this->getAttribute($context["localite"], "id", array()) == ($context["loc"] ?? $this->getContext($context, "loc")))) {
                // line 13
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
                echo "\" selected=\"true\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
                echo "</option>
               ";
            } else {
                // line 15
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
                echo "</option>
               ";
            }
            // line 17
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </select>
        
            <label for=\"typeselect\">Type de logement</label>
            <select class=\"form-control col-md-4\" name=\"typeselect\" id=\"typeselect\">
            <option value=\"0\">----selectionner le type de bien---</option>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 25
            echo "                ";
            if (($this->getAttribute($context["type"], "id", array()) == ($context["typeBien"] ?? $this->getContext($context, "typeBien")))) {
                // line 26
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
                echo "\" selected=\"true\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
                echo "</option>
                ";
            } else {
                // line 28
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
                echo "</option>
               ";
            }
            // line 30
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </select>
        
            <input type=\"number\" name=\"prix\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["prix"] ?? $this->getContext($context, "prix")), "html", null, true);
        echo "\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </form>
";
        
        $__internal_17bb6c6a59d33dad968f358d6d1f534dca62468217e3a707bf5b41e8a8558d23->leave($__internal_17bb6c6a59d33dad968f358d6d1f534dca62468217e3a707bf5b41e8a8558d23_prof);

        
        $__internal_71570b6b4200d4005d79bbfe4e85ca75f91d53aad4de6dd42cf545b8bed05fb6->leave($__internal_71570b6b4200d4005d79bbfe4e85ca75f91d53aad4de6dd42cf545b8bed05fb6_prof);

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
        return array (  145 => 33,  141 => 31,  135 => 30,  127 => 28,  119 => 26,  116 => 25,  112 => 24,  105 => 19,  98 => 17,  90 => 15,  82 => 13,  79 => 12,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}SNTImmobilierBundle:Front:searchBien{% endblock %}

{% block body %}
<form method=\"post\">
        <div class=\"form-group\">
            <label for=\"localiteselect\">Localité</label>
            <select class=\"form-control col-md-4\" name=\"localiteselect\" id=\"localiteselect\">
            <option value=\"0\">------selectionner la localité-----</option>
            {% for localite in localites %}
               {% if localite.id == loc %}
                    <option value=\"{{localite.id}}\" selected=\"true\">{{localite.libelle}}</option>
               {% else %}
                    <option value=\"{{localite.id}}\">{{localite.libelle}}</option>
               {% endif %}

            {% endfor %}
            </select>
        
            <label for=\"typeselect\">Type de logement</label>
            <select class=\"form-control col-md-4\" name=\"typeselect\" id=\"typeselect\">
            <option value=\"0\">----selectionner le type de bien---</option>
            {% for type in types %}
                {% if type.id == typeBien %}
                    <option value=\"{{type.id}}\" selected=\"true\">{{type.libelle}}</option>
                {% else %}
                    <option value=\"{{type.id}}\">{{type.libelle}}</option>
               {% endif %}
            {% endfor %}
            </select>
        
            <input type=\"number\" name=\"prix\" value=\"{{prix}}\">
            <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
        </div>
    </form>
{% endblock %}
", "SNTImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/immobilier/src/SNT/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
    }
}
