<?php

/* SNTImmobilierBundle:bien:show.html.twig */
class __TwigTemplate_69c0a20b3581943d62130356b112360b9168ec736f25f3633da33af55b981db9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SNTImmobilierBundle:bien:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34eb06a1cfdc896f722448a2b524c19c5d5e6dab38deb32def9ee916a60221ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34eb06a1cfdc896f722448a2b524c19c5d5e6dab38deb32def9ee916a60221ae->enter($__internal_34eb06a1cfdc896f722448a2b524c19c5d5e6dab38deb32def9ee916a60221ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:bien:show.html.twig"));

        $__internal_b88057d1b54d25ed55ea0315c230277650c4a69acbb57d993e36535f74aa8411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88057d1b54d25ed55ea0315c230277650c4a69acbb57d993e36535f74aa8411->enter($__internal_b88057d1b54d25ed55ea0315c230277650c4a69acbb57d993e36535f74aa8411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:bien:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34eb06a1cfdc896f722448a2b524c19c5d5e6dab38deb32def9ee916a60221ae->leave($__internal_34eb06a1cfdc896f722448a2b524c19c5d5e6dab38deb32def9ee916a60221ae_prof);

        
        $__internal_b88057d1b54d25ed55ea0315c230277650c4a69acbb57d993e36535f74aa8411->leave($__internal_b88057d1b54d25ed55ea0315c230277650c4a69acbb57d993e36535f74aa8411_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_780f1364519c6653d4161a4bd0bf1c2f400cbe226b9cefe6dd2c53be1796a24e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780f1364519c6653d4161a4bd0bf1c2f400cbe226b9cefe6dd2c53be1796a24e->enter($__internal_780f1364519c6653d4161a4bd0bf1c2f400cbe226b9cefe6dd2c53be1796a24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44bf4c079849808d876a33f4bf2ee670788fc93aedd132cd557874969d5ec1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bf4c079849808d876a33f4bf2ee670788fc93aedd132cd557874969d5ec1bd->enter($__internal_44bf4c079849808d876a33f4bf2ee670788fc93aedd132cd557874969d5ec1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bien</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombien</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "nomBien", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "etat", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Descrition</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "descrition", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prixlocation</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "prixLocation", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_edit", array("id" => $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_44bf4c079849808d876a33f4bf2ee670788fc93aedd132cd557874969d5ec1bd->leave($__internal_44bf4c079849808d876a33f4bf2ee670788fc93aedd132cd557874969d5ec1bd_prof);

        
        $__internal_780f1364519c6653d4161a4bd0bf1c2f400cbe226b9cefe6dd2c53be1796a24e->leave($__internal_780f1364519c6653d4161a4bd0bf1c2f400cbe226b9cefe6dd2c53be1796a24e_prof);

    }

    public function getTemplateName()
    {
        return "SNTImmobilierBundle:bien:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  111 => 39,  105 => 36,  99 => 33,  89 => 26,  82 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Bien</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ bien.id }}</td>
            </tr>
            <tr>
                <th>Nombien</th>
                <td>{{ bien.nomBien }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{% if bien.etat %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Descrition</th>
                <td>{{ bien.descrition }}</td>
            </tr>
            <tr>
                <th>Prixlocation</th>
                <td>{{ bien.prixLocation }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('bien_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('bien_edit', { 'id': bien.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "SNTImmobilierBundle:bien:show.html.twig", "/var/www/html/immobilier/src/SNT/ImmobilierBundle/Resources/views/bien/show.html.twig");
    }
}
