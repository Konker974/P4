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
        $__internal_24179f58cb08e90b02853833a61742695889907fc9ad3356b0d747029f1b92ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24179f58cb08e90b02853833a61742695889907fc9ad3356b0d747029f1b92ce->enter($__internal_24179f58cb08e90b02853833a61742695889907fc9ad3356b0d747029f1b92ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5420325ac55ff8c943104799b3c811411cf330052035885148787f81b5570451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5420325ac55ff8c943104799b3c811411cf330052035885148787f81b5570451->enter($__internal_5420325ac55ff8c943104799b3c811411cf330052035885148787f81b5570451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24179f58cb08e90b02853833a61742695889907fc9ad3356b0d747029f1b92ce->leave($__internal_24179f58cb08e90b02853833a61742695889907fc9ad3356b0d747029f1b92ce_prof);

        
        $__internal_5420325ac55ff8c943104799b3c811411cf330052035885148787f81b5570451->leave($__internal_5420325ac55ff8c943104799b3c811411cf330052035885148787f81b5570451_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a2eb841de747cb3e25db5c9b6d413b7865794548807067cdebb99fea7625629a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2eb841de747cb3e25db5c9b6d413b7865794548807067cdebb99fea7625629a->enter($__internal_a2eb841de747cb3e25db5c9b6d413b7865794548807067cdebb99fea7625629a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_940976520199357285882e9a32b14cb916005c61bdc464c3ae75f60595e61857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940976520199357285882e9a32b14cb916005c61bdc464c3ae75f60595e61857->enter($__internal_940976520199357285882e9a32b14cb916005c61bdc464c3ae75f60595e61857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_940976520199357285882e9a32b14cb916005c61bdc464c3ae75f60595e61857->leave($__internal_940976520199357285882e9a32b14cb916005c61bdc464c3ae75f60595e61857_prof);

        
        $__internal_a2eb841de747cb3e25db5c9b6d413b7865794548807067cdebb99fea7625629a->leave($__internal_a2eb841de747cb3e25db5c9b6d413b7865794548807067cdebb99fea7625629a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8ee501f3d7fd72e4473a07f188de773ca4df17ea1bec821b4cd82a4d0c6d9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ee501f3d7fd72e4473a07f188de773ca4df17ea1bec821b4cd82a4d0c6d9f4->enter($__internal_e8ee501f3d7fd72e4473a07f188de773ca4df17ea1bec821b4cd82a4d0c6d9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1cf1ee2b9a0dec7842f285fb737c73e7d35d8634636122bbf5d4fec36c3d517f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf1ee2b9a0dec7842f285fb737c73e7d35d8634636122bbf5d4fec36c3d517f->enter($__internal_1cf1ee2b9a0dec7842f285fb737c73e7d35d8634636122bbf5d4fec36c3d517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1cf1ee2b9a0dec7842f285fb737c73e7d35d8634636122bbf5d4fec36c3d517f->leave($__internal_1cf1ee2b9a0dec7842f285fb737c73e7d35d8634636122bbf5d4fec36c3d517f_prof);

        
        $__internal_e8ee501f3d7fd72e4473a07f188de773ca4df17ea1bec821b4cd82a4d0c6d9f4->leave($__internal_e8ee501f3d7fd72e4473a07f188de773ca4df17ea1bec821b4cd82a4d0c6d9f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9c613fd6adcd246df38ed299c3942472f911a411998a633f7785228a883f410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c613fd6adcd246df38ed299c3942472f911a411998a633f7785228a883f410->enter($__internal_d9c613fd6adcd246df38ed299c3942472f911a411998a633f7785228a883f410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2dc689d297c8cab90f9c00dcfc521c9b77c1b49e8ba16509016403b453ccf5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc689d297c8cab90f9c00dcfc521c9b77c1b49e8ba16509016403b453ccf5bd->enter($__internal_2dc689d297c8cab90f9c00dcfc521c9b77c1b49e8ba16509016403b453ccf5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2dc689d297c8cab90f9c00dcfc521c9b77c1b49e8ba16509016403b453ccf5bd->leave($__internal_2dc689d297c8cab90f9c00dcfc521c9b77c1b49e8ba16509016403b453ccf5bd_prof);

        
        $__internal_d9c613fd6adcd246df38ed299c3942472f911a411998a633f7785228a883f410->leave($__internal_d9c613fd6adcd246df38ed299c3942472f911a411998a633f7785228a883f410_prof);

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
