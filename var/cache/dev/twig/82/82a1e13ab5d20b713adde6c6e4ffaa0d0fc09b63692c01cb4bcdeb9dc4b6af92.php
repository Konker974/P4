<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b288100ef638887af2bb50a0af8fadc012909fe86ed77798ded82a88eb6f823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b288100ef638887af2bb50a0af8fadc012909fe86ed77798ded82a88eb6f823->enter($__internal_8b288100ef638887af2bb50a0af8fadc012909fe86ed77798ded82a88eb6f823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_98e390f006b5c841273ff81678f6759b41054d2194d3334e0f4ec0098cd97b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e390f006b5c841273ff81678f6759b41054d2194d3334e0f4ec0098cd97b9b->enter($__internal_98e390f006b5c841273ff81678f6759b41054d2194d3334e0f4ec0098cd97b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b288100ef638887af2bb50a0af8fadc012909fe86ed77798ded82a88eb6f823->leave($__internal_8b288100ef638887af2bb50a0af8fadc012909fe86ed77798ded82a88eb6f823_prof);

        
        $__internal_98e390f006b5c841273ff81678f6759b41054d2194d3334e0f4ec0098cd97b9b->leave($__internal_98e390f006b5c841273ff81678f6759b41054d2194d3334e0f4ec0098cd97b9b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_367c23894c2f98494bcaee81659e3c2fc26c051d28586b81611d9993fa6f5548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367c23894c2f98494bcaee81659e3c2fc26c051d28586b81611d9993fa6f5548->enter($__internal_367c23894c2f98494bcaee81659e3c2fc26c051d28586b81611d9993fa6f5548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a8f10bfea92076b47a7c71c8d520f9f04af1f719dc644f72240d0a013527f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8f10bfea92076b47a7c71c8d520f9f04af1f719dc644f72240d0a013527f87->enter($__internal_8a8f10bfea92076b47a7c71c8d520f9f04af1f719dc644f72240d0a013527f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8a8f10bfea92076b47a7c71c8d520f9f04af1f719dc644f72240d0a013527f87->leave($__internal_8a8f10bfea92076b47a7c71c8d520f9f04af1f719dc644f72240d0a013527f87_prof);

        
        $__internal_367c23894c2f98494bcaee81659e3c2fc26c051d28586b81611d9993fa6f5548->leave($__internal_367c23894c2f98494bcaee81659e3c2fc26c051d28586b81611d9993fa6f5548_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41c57462f67a0c1da746cb144856bae5cd816cbe93f4023bb486d03f4712a14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c57462f67a0c1da746cb144856bae5cd816cbe93f4023bb486d03f4712a14b->enter($__internal_41c57462f67a0c1da746cb144856bae5cd816cbe93f4023bb486d03f4712a14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_70711ed77ededf8d0fd9f9e489cfe1c25b20c5be0927843ef03428e3d73d3d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70711ed77ededf8d0fd9f9e489cfe1c25b20c5be0927843ef03428e3d73d3d9c->enter($__internal_70711ed77ededf8d0fd9f9e489cfe1c25b20c5be0927843ef03428e3d73d3d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_70711ed77ededf8d0fd9f9e489cfe1c25b20c5be0927843ef03428e3d73d3d9c->leave($__internal_70711ed77ededf8d0fd9f9e489cfe1c25b20c5be0927843ef03428e3d73d3d9c_prof);

        
        $__internal_41c57462f67a0c1da746cb144856bae5cd816cbe93f4023bb486d03f4712a14b->leave($__internal_41c57462f67a0c1da746cb144856bae5cd816cbe93f4023bb486d03f4712a14b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40250a0e2fabfde2a6e731483c57bc66247fac4c97931accf56a2d8f05d171f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40250a0e2fabfde2a6e731483c57bc66247fac4c97931accf56a2d8f05d171f1->enter($__internal_40250a0e2fabfde2a6e731483c57bc66247fac4c97931accf56a2d8f05d171f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48f1d354cb6d0abd474e6b1a45cc83addae4ed5e6568b5897f8fb3b22c501820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f1d354cb6d0abd474e6b1a45cc83addae4ed5e6568b5897f8fb3b22c501820->enter($__internal_48f1d354cb6d0abd474e6b1a45cc83addae4ed5e6568b5897f8fb3b22c501820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_48f1d354cb6d0abd474e6b1a45cc83addae4ed5e6568b5897f8fb3b22c501820->leave($__internal_48f1d354cb6d0abd474e6b1a45cc83addae4ed5e6568b5897f8fb3b22c501820_prof);

        
        $__internal_40250a0e2fabfde2a6e731483c57bc66247fac4c97931accf56a2d8f05d171f1->leave($__internal_40250a0e2fabfde2a6e731483c57bc66247fac4c97931accf56a2d8f05d171f1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\P4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
