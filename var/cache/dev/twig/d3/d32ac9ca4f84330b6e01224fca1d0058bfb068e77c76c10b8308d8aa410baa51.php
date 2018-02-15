<?php

/* SNTImmobilierBundle:bien:index.html.twig */
class __TwigTemplate_2d155f681b854c81bd2814e58569ab8d38b2c3b2080360f7896d5515de44859c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SNTImmobilierBundle:bien:index.html.twig", 1);
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
        $__internal_e3b4a3958d979a75bec6a629fb082bebb891e80a69986a80eb8a300a658a43d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b4a3958d979a75bec6a629fb082bebb891e80a69986a80eb8a300a658a43d5->enter($__internal_e3b4a3958d979a75bec6a629fb082bebb891e80a69986a80eb8a300a658a43d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:bien:index.html.twig"));

        $__internal_4518e6a86f0c916ec20b953da10d32d65fa300bf530856fe7fa59bb2cb79289f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4518e6a86f0c916ec20b953da10d32d65fa300bf530856fe7fa59bb2cb79289f->enter($__internal_4518e6a86f0c916ec20b953da10d32d65fa300bf530856fe7fa59bb2cb79289f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTImmobilierBundle:bien:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3b4a3958d979a75bec6a629fb082bebb891e80a69986a80eb8a300a658a43d5->leave($__internal_e3b4a3958d979a75bec6a629fb082bebb891e80a69986a80eb8a300a658a43d5_prof);

        
        $__internal_4518e6a86f0c916ec20b953da10d32d65fa300bf530856fe7fa59bb2cb79289f->leave($__internal_4518e6a86f0c916ec20b953da10d32d65fa300bf530856fe7fa59bb2cb79289f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c60bd9f80034f73b0542e66ef6b716fd11abbda7c5943f05822b2dabbe46f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c60bd9f80034f73b0542e66ef6b716fd11abbda7c5943f05822b2dabbe46f8e->enter($__internal_7c60bd9f80034f73b0542e66ef6b716fd11abbda7c5943f05822b2dabbe46f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c14f3ff8fd1f12042df03634eac4369ab1137c6d9638464cb6a1a0cbc70d03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c14f3ff8fd1f12042df03634eac4369ab1137c6d9638464cb6a1a0cbc70d03c->enter($__internal_7c14f3ff8fd1f12042df03634eac4369ab1137c6d9638464cb6a1a0cbc70d03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Biens list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombien</th>
                <th>Etat</th>
                <th>Descrition</th>
                <th>Prixlocation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_show", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["bien"], "etat", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "descrition", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLocation", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_show", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_edit", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bien_new");
        echo "\">Create a new bien</a>
        </li>
    </ul>
";
        
        $__internal_7c14f3ff8fd1f12042df03634eac4369ab1137c6d9638464cb6a1a0cbc70d03c->leave($__internal_7c14f3ff8fd1f12042df03634eac4369ab1137c6d9638464cb6a1a0cbc70d03c_prof);

        
        $__internal_7c60bd9f80034f73b0542e66ef6b716fd11abbda7c5943f05822b2dabbe46f8e->leave($__internal_7c60bd9f80034f73b0542e66ef6b716fd11abbda7c5943f05822b2dabbe46f8e_prof);

    }

    public function getTemplateName()
    {
        return "SNTImmobilierBundle:bien:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  119 => 37,  107 => 31,  101 => 28,  94 => 24,  90 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Biens list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombien</th>
                <th>Etat</th>
                <th>Descrition</th>
                <th>Prixlocation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for bien in biens %}
            <tr>
                <td><a href=\"{{ path('bien_show', { 'id': bien.id }) }}\">{{ bien.id }}</a></td>
                <td>{{ bien.nomBien }}</td>
                <td>{% if bien.etat %}Yes{% else %}No{% endif %}</td>
                <td>{{ bien.descrition }}</td>
                <td>{{ bien.prixLocation }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('bien_show', { 'id': bien.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('bien_edit', { 'id': bien.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('bien_new') }}\">Create a new bien</a>
        </li>
    </ul>
{% endblock %}
", "SNTImmobilierBundle:bien:index.html.twig", "/var/www/html/immobilier/src/SNT/ImmobilierBundle/Resources/views/bien/index.html.twig");
    }
}
