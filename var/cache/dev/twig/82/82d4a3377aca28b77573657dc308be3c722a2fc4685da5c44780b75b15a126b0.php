<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e2edcd78d4c111790a164927b34a1487806644133d71742ef326819410cdab84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2edcd78d4c111790a164927b34a1487806644133d71742ef326819410cdab84->enter($__internal_e2edcd78d4c111790a164927b34a1487806644133d71742ef326819410cdab84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9e002805541339e550bbc9848df64f508e54825c2ca3a28accdbfe21ab9b67d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e002805541339e550bbc9848df64f508e54825c2ca3a28accdbfe21ab9b67d9->enter($__internal_9e002805541339e550bbc9848df64f508e54825c2ca3a28accdbfe21ab9b67d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2edcd78d4c111790a164927b34a1487806644133d71742ef326819410cdab84->leave($__internal_e2edcd78d4c111790a164927b34a1487806644133d71742ef326819410cdab84_prof);

        
        $__internal_9e002805541339e550bbc9848df64f508e54825c2ca3a28accdbfe21ab9b67d9->leave($__internal_9e002805541339e550bbc9848df64f508e54825c2ca3a28accdbfe21ab9b67d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4bb773806fe911c4cb0d2d6f2c13e86f6ca9840e7f5c4378101d363f4653412d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb773806fe911c4cb0d2d6f2c13e86f6ca9840e7f5c4378101d363f4653412d->enter($__internal_4bb773806fe911c4cb0d2d6f2c13e86f6ca9840e7f5c4378101d363f4653412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b990bdf35be1d7de8592392dcef84f490a32078d80b508161791471dd9e27bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b990bdf35be1d7de8592392dcef84f490a32078d80b508161791471dd9e27bd7->enter($__internal_b990bdf35be1d7de8592392dcef84f490a32078d80b508161791471dd9e27bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b990bdf35be1d7de8592392dcef84f490a32078d80b508161791471dd9e27bd7->leave($__internal_b990bdf35be1d7de8592392dcef84f490a32078d80b508161791471dd9e27bd7_prof);

        
        $__internal_4bb773806fe911c4cb0d2d6f2c13e86f6ca9840e7f5c4378101d363f4653412d->leave($__internal_4bb773806fe911c4cb0d2d6f2c13e86f6ca9840e7f5c4378101d363f4653412d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8e38a167cda185716f942b57491480d24fcebb6a0cf802885281840dc732717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e38a167cda185716f942b57491480d24fcebb6a0cf802885281840dc732717->enter($__internal_a8e38a167cda185716f942b57491480d24fcebb6a0cf802885281840dc732717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d513ff0b4c624207585c55232a4224c9f4edf1724c47d0b1263d6b023d3be84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d513ff0b4c624207585c55232a4224c9f4edf1724c47d0b1263d6b023d3be84e->enter($__internal_d513ff0b4c624207585c55232a4224c9f4edf1724c47d0b1263d6b023d3be84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d513ff0b4c624207585c55232a4224c9f4edf1724c47d0b1263d6b023d3be84e->leave($__internal_d513ff0b4c624207585c55232a4224c9f4edf1724c47d0b1263d6b023d3be84e_prof);

        
        $__internal_a8e38a167cda185716f942b57491480d24fcebb6a0cf802885281840dc732717->leave($__internal_a8e38a167cda185716f942b57491480d24fcebb6a0cf802885281840dc732717_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_108b42527942f6492adb9e1a09eff48cfa3186e8f43a870b60a42e7660567425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108b42527942f6492adb9e1a09eff48cfa3186e8f43a870b60a42e7660567425->enter($__internal_108b42527942f6492adb9e1a09eff48cfa3186e8f43a870b60a42e7660567425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24db26282c603eb25c94bc5fa21d75c4e29a3b2ecc9ed56cdecc118cc6b73eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24db26282c603eb25c94bc5fa21d75c4e29a3b2ecc9ed56cdecc118cc6b73eb5->enter($__internal_24db26282c603eb25c94bc5fa21d75c4e29a3b2ecc9ed56cdecc118cc6b73eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_24db26282c603eb25c94bc5fa21d75c4e29a3b2ecc9ed56cdecc118cc6b73eb5->leave($__internal_24db26282c603eb25c94bc5fa21d75c4e29a3b2ecc9ed56cdecc118cc6b73eb5_prof);

        
        $__internal_108b42527942f6492adb9e1a09eff48cfa3186e8f43a870b60a42e7660567425->leave($__internal_108b42527942f6492adb9e1a09eff48cfa3186e8f43a870b60a42e7660567425_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\P4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
