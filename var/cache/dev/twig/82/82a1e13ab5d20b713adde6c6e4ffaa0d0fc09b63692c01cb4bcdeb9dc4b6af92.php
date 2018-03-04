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
        $__internal_73caab8409002e782ffe637ef9183a0b72c3a3c811d1f17c2084d2fedaaea188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73caab8409002e782ffe637ef9183a0b72c3a3c811d1f17c2084d2fedaaea188->enter($__internal_73caab8409002e782ffe637ef9183a0b72c3a3c811d1f17c2084d2fedaaea188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_183a1363e57e529f4135ce9be7db8a1e47bc17d2f0299930a08ed8a6f0cd411e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183a1363e57e529f4135ce9be7db8a1e47bc17d2f0299930a08ed8a6f0cd411e->enter($__internal_183a1363e57e529f4135ce9be7db8a1e47bc17d2f0299930a08ed8a6f0cd411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73caab8409002e782ffe637ef9183a0b72c3a3c811d1f17c2084d2fedaaea188->leave($__internal_73caab8409002e782ffe637ef9183a0b72c3a3c811d1f17c2084d2fedaaea188_prof);

        
        $__internal_183a1363e57e529f4135ce9be7db8a1e47bc17d2f0299930a08ed8a6f0cd411e->leave($__internal_183a1363e57e529f4135ce9be7db8a1e47bc17d2f0299930a08ed8a6f0cd411e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed680357c990371afe9b4bfb58a45814a7f3523ecacd23ed552071239803d679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed680357c990371afe9b4bfb58a45814a7f3523ecacd23ed552071239803d679->enter($__internal_ed680357c990371afe9b4bfb58a45814a7f3523ecacd23ed552071239803d679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_daad2cc2bdb564b7dc0786c100047b0d54dcfcdb31ab0c9b34dc2ff3e3a7e121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daad2cc2bdb564b7dc0786c100047b0d54dcfcdb31ab0c9b34dc2ff3e3a7e121->enter($__internal_daad2cc2bdb564b7dc0786c100047b0d54dcfcdb31ab0c9b34dc2ff3e3a7e121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_daad2cc2bdb564b7dc0786c100047b0d54dcfcdb31ab0c9b34dc2ff3e3a7e121->leave($__internal_daad2cc2bdb564b7dc0786c100047b0d54dcfcdb31ab0c9b34dc2ff3e3a7e121_prof);

        
        $__internal_ed680357c990371afe9b4bfb58a45814a7f3523ecacd23ed552071239803d679->leave($__internal_ed680357c990371afe9b4bfb58a45814a7f3523ecacd23ed552071239803d679_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1db2fc07f9095a8b2180d5d0e7604eb291a010674d446dc6541138e97a9b948b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db2fc07f9095a8b2180d5d0e7604eb291a010674d446dc6541138e97a9b948b->enter($__internal_1db2fc07f9095a8b2180d5d0e7604eb291a010674d446dc6541138e97a9b948b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bd7ec2b4e7e8a9d2edba18b64ae879abd61567f4d96690ae96859bd096f2d925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7ec2b4e7e8a9d2edba18b64ae879abd61567f4d96690ae96859bd096f2d925->enter($__internal_bd7ec2b4e7e8a9d2edba18b64ae879abd61567f4d96690ae96859bd096f2d925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bd7ec2b4e7e8a9d2edba18b64ae879abd61567f4d96690ae96859bd096f2d925->leave($__internal_bd7ec2b4e7e8a9d2edba18b64ae879abd61567f4d96690ae96859bd096f2d925_prof);

        
        $__internal_1db2fc07f9095a8b2180d5d0e7604eb291a010674d446dc6541138e97a9b948b->leave($__internal_1db2fc07f9095a8b2180d5d0e7604eb291a010674d446dc6541138e97a9b948b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d46ea02215960533fc517de26000d27088c8bb04bedfeac74d4830d56423005c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46ea02215960533fc517de26000d27088c8bb04bedfeac74d4830d56423005c->enter($__internal_d46ea02215960533fc517de26000d27088c8bb04bedfeac74d4830d56423005c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53b22399745331e6d59950917d38ce3a6f98cca8d63e5f74aa1b327d41753f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b22399745331e6d59950917d38ce3a6f98cca8d63e5f74aa1b327d41753f6a->enter($__internal_53b22399745331e6d59950917d38ce3a6f98cca8d63e5f74aa1b327d41753f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_53b22399745331e6d59950917d38ce3a6f98cca8d63e5f74aa1b327d41753f6a->leave($__internal_53b22399745331e6d59950917d38ce3a6f98cca8d63e5f74aa1b327d41753f6a_prof);

        
        $__internal_d46ea02215960533fc517de26000d27088c8bb04bedfeac74d4830d56423005c->leave($__internal_d46ea02215960533fc517de26000d27088c8bb04bedfeac74d4830d56423005c_prof);

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
