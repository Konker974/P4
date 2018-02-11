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
        $__internal_66f3e6951dd35a0bc2d7c8f23d5dd1d661ec96054b933bc8c7f17c40855deb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f3e6951dd35a0bc2d7c8f23d5dd1d661ec96054b933bc8c7f17c40855deb58->enter($__internal_66f3e6951dd35a0bc2d7c8f23d5dd1d661ec96054b933bc8c7f17c40855deb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3fd13d725c71fbf4e0bbb37669a7603720be7eda7db3461e26d401f9389455d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd13d725c71fbf4e0bbb37669a7603720be7eda7db3461e26d401f9389455d9->enter($__internal_3fd13d725c71fbf4e0bbb37669a7603720be7eda7db3461e26d401f9389455d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f3e6951dd35a0bc2d7c8f23d5dd1d661ec96054b933bc8c7f17c40855deb58->leave($__internal_66f3e6951dd35a0bc2d7c8f23d5dd1d661ec96054b933bc8c7f17c40855deb58_prof);

        
        $__internal_3fd13d725c71fbf4e0bbb37669a7603720be7eda7db3461e26d401f9389455d9->leave($__internal_3fd13d725c71fbf4e0bbb37669a7603720be7eda7db3461e26d401f9389455d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d431ede24d64a5eb548de4c394778ca0a5b5e404316913cc5dbbaeb7314e9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d431ede24d64a5eb548de4c394778ca0a5b5e404316913cc5dbbaeb7314e9d1->enter($__internal_0d431ede24d64a5eb548de4c394778ca0a5b5e404316913cc5dbbaeb7314e9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7efd33b975e3a90abd4199837bbdb586938315f53f7704dc9938647396166f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efd33b975e3a90abd4199837bbdb586938315f53f7704dc9938647396166f11->enter($__internal_7efd33b975e3a90abd4199837bbdb586938315f53f7704dc9938647396166f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7efd33b975e3a90abd4199837bbdb586938315f53f7704dc9938647396166f11->leave($__internal_7efd33b975e3a90abd4199837bbdb586938315f53f7704dc9938647396166f11_prof);

        
        $__internal_0d431ede24d64a5eb548de4c394778ca0a5b5e404316913cc5dbbaeb7314e9d1->leave($__internal_0d431ede24d64a5eb548de4c394778ca0a5b5e404316913cc5dbbaeb7314e9d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab0d85686f71ca6829cd152d176bc875b3d37c528ef6d079fba5a1d6aafa41cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0d85686f71ca6829cd152d176bc875b3d37c528ef6d079fba5a1d6aafa41cd->enter($__internal_ab0d85686f71ca6829cd152d176bc875b3d37c528ef6d079fba5a1d6aafa41cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8560248e3c34ed4024f30636b45aed5f7fc031ac76b36139a20ed2a5f0eca1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8560248e3c34ed4024f30636b45aed5f7fc031ac76b36139a20ed2a5f0eca1d9->enter($__internal_8560248e3c34ed4024f30636b45aed5f7fc031ac76b36139a20ed2a5f0eca1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8560248e3c34ed4024f30636b45aed5f7fc031ac76b36139a20ed2a5f0eca1d9->leave($__internal_8560248e3c34ed4024f30636b45aed5f7fc031ac76b36139a20ed2a5f0eca1d9_prof);

        
        $__internal_ab0d85686f71ca6829cd152d176bc875b3d37c528ef6d079fba5a1d6aafa41cd->leave($__internal_ab0d85686f71ca6829cd152d176bc875b3d37c528ef6d079fba5a1d6aafa41cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba4758c67f9900f3df1af1f3797029da44f964a707489e7179e3733452427453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4758c67f9900f3df1af1f3797029da44f964a707489e7179e3733452427453->enter($__internal_ba4758c67f9900f3df1af1f3797029da44f964a707489e7179e3733452427453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_69e1f3f7b08a9c67eecf3bbeedac25d3203eff1aa219262944f52e4371d8d6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e1f3f7b08a9c67eecf3bbeedac25d3203eff1aa219262944f52e4371d8d6bd->enter($__internal_69e1f3f7b08a9c67eecf3bbeedac25d3203eff1aa219262944f52e4371d8d6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_69e1f3f7b08a9c67eecf3bbeedac25d3203eff1aa219262944f52e4371d8d6bd->leave($__internal_69e1f3f7b08a9c67eecf3bbeedac25d3203eff1aa219262944f52e4371d8d6bd_prof);

        
        $__internal_ba4758c67f9900f3df1af1f3797029da44f964a707489e7179e3733452427453->leave($__internal_ba4758c67f9900f3df1af1f3797029da44f964a707489e7179e3733452427453_prof);

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
