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
        $__internal_f68f2fd369ab26b192c87a28cfc323e29a46a2d8bdf462fc54d566feac50826f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68f2fd369ab26b192c87a28cfc323e29a46a2d8bdf462fc54d566feac50826f->enter($__internal_f68f2fd369ab26b192c87a28cfc323e29a46a2d8bdf462fc54d566feac50826f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4f51e108069409b6c1ba26c9d3a7cf60e429ae60b7d57d05251722c18ee4cd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f51e108069409b6c1ba26c9d3a7cf60e429ae60b7d57d05251722c18ee4cd06->enter($__internal_4f51e108069409b6c1ba26c9d3a7cf60e429ae60b7d57d05251722c18ee4cd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f68f2fd369ab26b192c87a28cfc323e29a46a2d8bdf462fc54d566feac50826f->leave($__internal_f68f2fd369ab26b192c87a28cfc323e29a46a2d8bdf462fc54d566feac50826f_prof);

        
        $__internal_4f51e108069409b6c1ba26c9d3a7cf60e429ae60b7d57d05251722c18ee4cd06->leave($__internal_4f51e108069409b6c1ba26c9d3a7cf60e429ae60b7d57d05251722c18ee4cd06_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_019314b7b9167532632094e68ee0ab4617715b1a7a7e31585a7857f639bf936d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019314b7b9167532632094e68ee0ab4617715b1a7a7e31585a7857f639bf936d->enter($__internal_019314b7b9167532632094e68ee0ab4617715b1a7a7e31585a7857f639bf936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_624c36aae96d9e63632e3521c57f712bf644a7044b910977a1c9c41a20e78ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624c36aae96d9e63632e3521c57f712bf644a7044b910977a1c9c41a20e78ad0->enter($__internal_624c36aae96d9e63632e3521c57f712bf644a7044b910977a1c9c41a20e78ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_624c36aae96d9e63632e3521c57f712bf644a7044b910977a1c9c41a20e78ad0->leave($__internal_624c36aae96d9e63632e3521c57f712bf644a7044b910977a1c9c41a20e78ad0_prof);

        
        $__internal_019314b7b9167532632094e68ee0ab4617715b1a7a7e31585a7857f639bf936d->leave($__internal_019314b7b9167532632094e68ee0ab4617715b1a7a7e31585a7857f639bf936d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_357ee66d62d6e2a4744ac3f76bbcaba4c5c0e737e92db537cf5ade07b7193841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357ee66d62d6e2a4744ac3f76bbcaba4c5c0e737e92db537cf5ade07b7193841->enter($__internal_357ee66d62d6e2a4744ac3f76bbcaba4c5c0e737e92db537cf5ade07b7193841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e4ea1d965b350f9043ce1154c3f46ef90383665454c5b8b0bd0393551a5eba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4ea1d965b350f9043ce1154c3f46ef90383665454c5b8b0bd0393551a5eba3->enter($__internal_8e4ea1d965b350f9043ce1154c3f46ef90383665454c5b8b0bd0393551a5eba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e4ea1d965b350f9043ce1154c3f46ef90383665454c5b8b0bd0393551a5eba3->leave($__internal_8e4ea1d965b350f9043ce1154c3f46ef90383665454c5b8b0bd0393551a5eba3_prof);

        
        $__internal_357ee66d62d6e2a4744ac3f76bbcaba4c5c0e737e92db537cf5ade07b7193841->leave($__internal_357ee66d62d6e2a4744ac3f76bbcaba4c5c0e737e92db537cf5ade07b7193841_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6508b7defabf52bfdc0e46daea884599778cf05492a8a7188b298b393b7a3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6508b7defabf52bfdc0e46daea884599778cf05492a8a7188b298b393b7a3ae->enter($__internal_f6508b7defabf52bfdc0e46daea884599778cf05492a8a7188b298b393b7a3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_17b896315dab193bbb4395fea7210f61efe8ee1598c8495b0f21315d1bdd042a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b896315dab193bbb4395fea7210f61efe8ee1598c8495b0f21315d1bdd042a->enter($__internal_17b896315dab193bbb4395fea7210f61efe8ee1598c8495b0f21315d1bdd042a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_17b896315dab193bbb4395fea7210f61efe8ee1598c8495b0f21315d1bdd042a->leave($__internal_17b896315dab193bbb4395fea7210f61efe8ee1598c8495b0f21315d1bdd042a_prof);

        
        $__internal_f6508b7defabf52bfdc0e46daea884599778cf05492a8a7188b298b393b7a3ae->leave($__internal_f6508b7defabf52bfdc0e46daea884599778cf05492a8a7188b298b393b7a3ae_prof);

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
