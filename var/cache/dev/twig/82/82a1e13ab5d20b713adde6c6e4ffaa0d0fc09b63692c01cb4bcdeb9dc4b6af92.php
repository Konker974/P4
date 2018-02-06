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
        $__internal_f2e8d9c920f9c61cb2306e800e9ff8c5fbf2cfa16cd9768de8f1a4408b77f609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e8d9c920f9c61cb2306e800e9ff8c5fbf2cfa16cd9768de8f1a4408b77f609->enter($__internal_f2e8d9c920f9c61cb2306e800e9ff8c5fbf2cfa16cd9768de8f1a4408b77f609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f6668fd73b3e000c78d49d22effb1027797df9219aa3b69da9703bdfb9c48ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6668fd73b3e000c78d49d22effb1027797df9219aa3b69da9703bdfb9c48ef8->enter($__internal_f6668fd73b3e000c78d49d22effb1027797df9219aa3b69da9703bdfb9c48ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2e8d9c920f9c61cb2306e800e9ff8c5fbf2cfa16cd9768de8f1a4408b77f609->leave($__internal_f2e8d9c920f9c61cb2306e800e9ff8c5fbf2cfa16cd9768de8f1a4408b77f609_prof);

        
        $__internal_f6668fd73b3e000c78d49d22effb1027797df9219aa3b69da9703bdfb9c48ef8->leave($__internal_f6668fd73b3e000c78d49d22effb1027797df9219aa3b69da9703bdfb9c48ef8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd5fa91424357b7f7a2620d70106bc929dd1aca2a19b5cd397f0b87db111851e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd5fa91424357b7f7a2620d70106bc929dd1aca2a19b5cd397f0b87db111851e->enter($__internal_fd5fa91424357b7f7a2620d70106bc929dd1aca2a19b5cd397f0b87db111851e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5862917318c4012eb46b4eac437c13210762985e76acd755af329ee00be990aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5862917318c4012eb46b4eac437c13210762985e76acd755af329ee00be990aa->enter($__internal_5862917318c4012eb46b4eac437c13210762985e76acd755af329ee00be990aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5862917318c4012eb46b4eac437c13210762985e76acd755af329ee00be990aa->leave($__internal_5862917318c4012eb46b4eac437c13210762985e76acd755af329ee00be990aa_prof);

        
        $__internal_fd5fa91424357b7f7a2620d70106bc929dd1aca2a19b5cd397f0b87db111851e->leave($__internal_fd5fa91424357b7f7a2620d70106bc929dd1aca2a19b5cd397f0b87db111851e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03284105515d6b6cf61ef810c51b6740d9917847ad69c79dab8904e83952584a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03284105515d6b6cf61ef810c51b6740d9917847ad69c79dab8904e83952584a->enter($__internal_03284105515d6b6cf61ef810c51b6740d9917847ad69c79dab8904e83952584a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_61cbf1bd80916cbb3c6e038c44a202324c9c509ae0b78fe3bdbc5baaa52581d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cbf1bd80916cbb3c6e038c44a202324c9c509ae0b78fe3bdbc5baaa52581d3->enter($__internal_61cbf1bd80916cbb3c6e038c44a202324c9c509ae0b78fe3bdbc5baaa52581d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_61cbf1bd80916cbb3c6e038c44a202324c9c509ae0b78fe3bdbc5baaa52581d3->leave($__internal_61cbf1bd80916cbb3c6e038c44a202324c9c509ae0b78fe3bdbc5baaa52581d3_prof);

        
        $__internal_03284105515d6b6cf61ef810c51b6740d9917847ad69c79dab8904e83952584a->leave($__internal_03284105515d6b6cf61ef810c51b6740d9917847ad69c79dab8904e83952584a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9af1dadfb197ac2be89e1af9d90f74a2e282d811d90acd24457e0323a772798f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af1dadfb197ac2be89e1af9d90f74a2e282d811d90acd24457e0323a772798f->enter($__internal_9af1dadfb197ac2be89e1af9d90f74a2e282d811d90acd24457e0323a772798f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7683b5832eb51025132e28ef41e97cf39ee16aa6f6d0c73f29ca641a20eb4aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7683b5832eb51025132e28ef41e97cf39ee16aa6f6d0c73f29ca641a20eb4aab->enter($__internal_7683b5832eb51025132e28ef41e97cf39ee16aa6f6d0c73f29ca641a20eb4aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7683b5832eb51025132e28ef41e97cf39ee16aa6f6d0c73f29ca641a20eb4aab->leave($__internal_7683b5832eb51025132e28ef41e97cf39ee16aa6f6d0c73f29ca641a20eb4aab_prof);

        
        $__internal_9af1dadfb197ac2be89e1af9d90f74a2e282d811d90acd24457e0323a772798f->leave($__internal_9af1dadfb197ac2be89e1af9d90f74a2e282d811d90acd24457e0323a772798f_prof);

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
