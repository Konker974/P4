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
        $__internal_babefad35142e46e2b19f023197b01c46414002891479ebfd6f264edc695fcff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babefad35142e46e2b19f023197b01c46414002891479ebfd6f264edc695fcff->enter($__internal_babefad35142e46e2b19f023197b01c46414002891479ebfd6f264edc695fcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ca6843accbd3e1bef6a156a8926dc56dd95de51c0736fc828d245d2fc0d4c7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6843accbd3e1bef6a156a8926dc56dd95de51c0736fc828d245d2fc0d4c7c8->enter($__internal_ca6843accbd3e1bef6a156a8926dc56dd95de51c0736fc828d245d2fc0d4c7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_babefad35142e46e2b19f023197b01c46414002891479ebfd6f264edc695fcff->leave($__internal_babefad35142e46e2b19f023197b01c46414002891479ebfd6f264edc695fcff_prof);

        
        $__internal_ca6843accbd3e1bef6a156a8926dc56dd95de51c0736fc828d245d2fc0d4c7c8->leave($__internal_ca6843accbd3e1bef6a156a8926dc56dd95de51c0736fc828d245d2fc0d4c7c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34f949cd7adba372295e66af3b8e28710742d4564119411399b4768bb9cc687d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f949cd7adba372295e66af3b8e28710742d4564119411399b4768bb9cc687d->enter($__internal_34f949cd7adba372295e66af3b8e28710742d4564119411399b4768bb9cc687d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ff1ecd6dc307a138b15dbfa28c57557ccd88d97d641d2df235f7e1407b1390d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1ecd6dc307a138b15dbfa28c57557ccd88d97d641d2df235f7e1407b1390d9->enter($__internal_ff1ecd6dc307a138b15dbfa28c57557ccd88d97d641d2df235f7e1407b1390d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ff1ecd6dc307a138b15dbfa28c57557ccd88d97d641d2df235f7e1407b1390d9->leave($__internal_ff1ecd6dc307a138b15dbfa28c57557ccd88d97d641d2df235f7e1407b1390d9_prof);

        
        $__internal_34f949cd7adba372295e66af3b8e28710742d4564119411399b4768bb9cc687d->leave($__internal_34f949cd7adba372295e66af3b8e28710742d4564119411399b4768bb9cc687d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_694338568b26e54d77df3a75e715714165d857d2a840e83e843bac20b1d7f132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694338568b26e54d77df3a75e715714165d857d2a840e83e843bac20b1d7f132->enter($__internal_694338568b26e54d77df3a75e715714165d857d2a840e83e843bac20b1d7f132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6171707834e9d59729e6dc19df80dbb25f11f67f1bbd575ddc6e45ca3cd50bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6171707834e9d59729e6dc19df80dbb25f11f67f1bbd575ddc6e45ca3cd50bc9->enter($__internal_6171707834e9d59729e6dc19df80dbb25f11f67f1bbd575ddc6e45ca3cd50bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6171707834e9d59729e6dc19df80dbb25f11f67f1bbd575ddc6e45ca3cd50bc9->leave($__internal_6171707834e9d59729e6dc19df80dbb25f11f67f1bbd575ddc6e45ca3cd50bc9_prof);

        
        $__internal_694338568b26e54d77df3a75e715714165d857d2a840e83e843bac20b1d7f132->leave($__internal_694338568b26e54d77df3a75e715714165d857d2a840e83e843bac20b1d7f132_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cae4e189db27959d2d5789f141ed2f092ba81ae1382f431f6fff49481afc1388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae4e189db27959d2d5789f141ed2f092ba81ae1382f431f6fff49481afc1388->enter($__internal_cae4e189db27959d2d5789f141ed2f092ba81ae1382f431f6fff49481afc1388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9f8724cf2d51be0554b312013755c2274595a885db512e1b047b8f4f2a06ff22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8724cf2d51be0554b312013755c2274595a885db512e1b047b8f4f2a06ff22->enter($__internal_9f8724cf2d51be0554b312013755c2274595a885db512e1b047b8f4f2a06ff22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9f8724cf2d51be0554b312013755c2274595a885db512e1b047b8f4f2a06ff22->leave($__internal_9f8724cf2d51be0554b312013755c2274595a885db512e1b047b8f4f2a06ff22_prof);

        
        $__internal_cae4e189db27959d2d5789f141ed2f092ba81ae1382f431f6fff49481afc1388->leave($__internal_cae4e189db27959d2d5789f141ed2f092ba81ae1382f431f6fff49481afc1388_prof);

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
