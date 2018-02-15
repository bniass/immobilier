<?php

/* bien/show.html.twig */
class __TwigTemplate_f6dd8714e318dff22690dae00d8e42673fa3daad56c0dfab40f434a6580fd490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bien/show.html.twig", 1);
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
        $__internal_be27c8e7261cb99101efbf48e428caacd14f6e22959aec12b4d8beef3d4ec263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be27c8e7261cb99101efbf48e428caacd14f6e22959aec12b4d8beef3d4ec263->enter($__internal_be27c8e7261cb99101efbf48e428caacd14f6e22959aec12b4d8beef3d4ec263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bien/show.html.twig"));

        $__internal_d18e6e8b42d42bb7088e2582352242bef0295878e6ed0c504c4296c7f00f185f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18e6e8b42d42bb7088e2582352242bef0295878e6ed0c504c4296c7f00f185f->enter($__internal_d18e6e8b42d42bb7088e2582352242bef0295878e6ed0c504c4296c7f00f185f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bien/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be27c8e7261cb99101efbf48e428caacd14f6e22959aec12b4d8beef3d4ec263->leave($__internal_be27c8e7261cb99101efbf48e428caacd14f6e22959aec12b4d8beef3d4ec263_prof);

        
        $__internal_d18e6e8b42d42bb7088e2582352242bef0295878e6ed0c504c4296c7f00f185f->leave($__internal_d18e6e8b42d42bb7088e2582352242bef0295878e6ed0c504c4296c7f00f185f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63e2ea95e9f6b6ec8b36f37c28e436a5e8de836f61a66fe594005424e0a1bd55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e2ea95e9f6b6ec8b36f37c28e436a5e8de836f61a66fe594005424e0a1bd55->enter($__internal_63e2ea95e9f6b6ec8b36f37c28e436a5e8de836f61a66fe594005424e0a1bd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b1707f4e1596da1d9cf0b38fda1d19c9bc3f0f2b8032a58119b21f64b6eca13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b1707f4e1596da1d9cf0b38fda1d19c9bc3f0f2b8032a58119b21f64b6eca13->enter($__internal_7b1707f4e1596da1d9cf0b38fda1d19c9bc3f0f2b8032a58119b21f64b6eca13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7b1707f4e1596da1d9cf0b38fda1d19c9bc3f0f2b8032a58119b21f64b6eca13->leave($__internal_7b1707f4e1596da1d9cf0b38fda1d19c9bc3f0f2b8032a58119b21f64b6eca13_prof);

        
        $__internal_63e2ea95e9f6b6ec8b36f37c28e436a5e8de836f61a66fe594005424e0a1bd55->leave($__internal_63e2ea95e9f6b6ec8b36f37c28e436a5e8de836f61a66fe594005424e0a1bd55_prof);

    }

    public function getTemplateName()
    {
        return "bien/show.html.twig";
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
", "bien/show.html.twig", "/var/www/html/immobilier/app/Resources/views/bien/show.html.twig");
    }
}
