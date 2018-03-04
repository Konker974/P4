<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d306f6f2fe6c35f404b707fa3e09fdef0c32ea3bd99a30a8c90ca3c6faa1bcfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13752695d203205f49594d84eb7503a2109bd35596e9be6a3d14ce8f929a63f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13752695d203205f49594d84eb7503a2109bd35596e9be6a3d14ce8f929a63f9->enter($__internal_13752695d203205f49594d84eb7503a2109bd35596e9be6a3d14ce8f929a63f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1ce13f0688bdbf11c8271ba36a20556fd86ffcc4f69e9a2c1e18f631854b5351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce13f0688bdbf11c8271ba36a20556fd86ffcc4f69e9a2c1e18f631854b5351->enter($__internal_1ce13f0688bdbf11c8271ba36a20556fd86ffcc4f69e9a2c1e18f631854b5351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13752695d203205f49594d84eb7503a2109bd35596e9be6a3d14ce8f929a63f9->leave($__internal_13752695d203205f49594d84eb7503a2109bd35596e9be6a3d14ce8f929a63f9_prof);

        
        $__internal_1ce13f0688bdbf11c8271ba36a20556fd86ffcc4f69e9a2c1e18f631854b5351->leave($__internal_1ce13f0688bdbf11c8271ba36a20556fd86ffcc4f69e9a2c1e18f631854b5351_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7162839a084a5448c3d4b38a7fc426ced503cf9d6e042af79bd1e03359ee9998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7162839a084a5448c3d4b38a7fc426ced503cf9d6e042af79bd1e03359ee9998->enter($__internal_7162839a084a5448c3d4b38a7fc426ced503cf9d6e042af79bd1e03359ee9998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_671011a09aa343d050d85f383de3ceef3176e886e6848402b1d6286847af37c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671011a09aa343d050d85f383de3ceef3176e886e6848402b1d6286847af37c8->enter($__internal_671011a09aa343d050d85f383de3ceef3176e886e6848402b1d6286847af37c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_671011a09aa343d050d85f383de3ceef3176e886e6848402b1d6286847af37c8->leave($__internal_671011a09aa343d050d85f383de3ceef3176e886e6848402b1d6286847af37c8_prof);

        
        $__internal_7162839a084a5448c3d4b38a7fc426ced503cf9d6e042af79bd1e03359ee9998->leave($__internal_7162839a084a5448c3d4b38a7fc426ced503cf9d6e042af79bd1e03359ee9998_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\P4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
