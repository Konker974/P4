<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5493995540b4715330b2dc4786bd196fbea32ad5fec99f90e612b8b79aa3902a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5493995540b4715330b2dc4786bd196fbea32ad5fec99f90e612b8b79aa3902a->enter($__internal_5493995540b4715330b2dc4786bd196fbea32ad5fec99f90e612b8b79aa3902a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3063bac9b26ab5e1cca92897d11f187462956254b2aa3c85f1f53afc942a698f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3063bac9b26ab5e1cca92897d11f187462956254b2aa3c85f1f53afc942a698f->enter($__internal_3063bac9b26ab5e1cca92897d11f187462956254b2aa3c85f1f53afc942a698f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5493995540b4715330b2dc4786bd196fbea32ad5fec99f90e612b8b79aa3902a->leave($__internal_5493995540b4715330b2dc4786bd196fbea32ad5fec99f90e612b8b79aa3902a_prof);

        
        $__internal_3063bac9b26ab5e1cca92897d11f187462956254b2aa3c85f1f53afc942a698f->leave($__internal_3063bac9b26ab5e1cca92897d11f187462956254b2aa3c85f1f53afc942a698f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b4d797b0dce9a6fbc1ae1138a0b533fde0912234a496460b92e3cfea0bf543e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4d797b0dce9a6fbc1ae1138a0b533fde0912234a496460b92e3cfea0bf543e->enter($__internal_7b4d797b0dce9a6fbc1ae1138a0b533fde0912234a496460b92e3cfea0bf543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_756eaadca77875b7647b125aef0ce3d73530721033f338da9a2570b69f4dde41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756eaadca77875b7647b125aef0ce3d73530721033f338da9a2570b69f4dde41->enter($__internal_756eaadca77875b7647b125aef0ce3d73530721033f338da9a2570b69f4dde41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_756eaadca77875b7647b125aef0ce3d73530721033f338da9a2570b69f4dde41->leave($__internal_756eaadca77875b7647b125aef0ce3d73530721033f338da9a2570b69f4dde41_prof);

        
        $__internal_7b4d797b0dce9a6fbc1ae1138a0b533fde0912234a496460b92e3cfea0bf543e->leave($__internal_7b4d797b0dce9a6fbc1ae1138a0b533fde0912234a496460b92e3cfea0bf543e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_271508d9ba877371e00c5e3b551931f06e06fb7d55479600ba17a5b115c78b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271508d9ba877371e00c5e3b551931f06e06fb7d55479600ba17a5b115c78b9f->enter($__internal_271508d9ba877371e00c5e3b551931f06e06fb7d55479600ba17a5b115c78b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_17d609980f7a3744495ed5cc0262b2584748b4bd94a5695cd36957318b1cd590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d609980f7a3744495ed5cc0262b2584748b4bd94a5695cd36957318b1cd590->enter($__internal_17d609980f7a3744495ed5cc0262b2584748b4bd94a5695cd36957318b1cd590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_17d609980f7a3744495ed5cc0262b2584748b4bd94a5695cd36957318b1cd590->leave($__internal_17d609980f7a3744495ed5cc0262b2584748b4bd94a5695cd36957318b1cd590_prof);

        
        $__internal_271508d9ba877371e00c5e3b551931f06e06fb7d55479600ba17a5b115c78b9f->leave($__internal_271508d9ba877371e00c5e3b551931f06e06fb7d55479600ba17a5b115c78b9f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e368de4089ec528df2bbdf0f807abb6cd16aa291ff51561986e3b9c2ea5ec5ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e368de4089ec528df2bbdf0f807abb6cd16aa291ff51561986e3b9c2ea5ec5ef->enter($__internal_e368de4089ec528df2bbdf0f807abb6cd16aa291ff51561986e3b9c2ea5ec5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_083a278f0c00e22188dd416db9f1926a6ab99353649bc41a22a3293c6557dc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083a278f0c00e22188dd416db9f1926a6ab99353649bc41a22a3293c6557dc53->enter($__internal_083a278f0c00e22188dd416db9f1926a6ab99353649bc41a22a3293c6557dc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_083a278f0c00e22188dd416db9f1926a6ab99353649bc41a22a3293c6557dc53->leave($__internal_083a278f0c00e22188dd416db9f1926a6ab99353649bc41a22a3293c6557dc53_prof);

        
        $__internal_e368de4089ec528df2bbdf0f807abb6cd16aa291ff51561986e3b9c2ea5ec5ef->leave($__internal_e368de4089ec528df2bbdf0f807abb6cd16aa291ff51561986e3b9c2ea5ec5ef_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f08b14986dc8102fc3a925e738ec04fb89bf6e82ecaabe31a215d3379f5d4439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08b14986dc8102fc3a925e738ec04fb89bf6e82ecaabe31a215d3379f5d4439->enter($__internal_f08b14986dc8102fc3a925e738ec04fb89bf6e82ecaabe31a215d3379f5d4439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3dbc9d5b5222be423b0f0e00f578acac9034a56394dd0a2186f33e14e53ca2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbc9d5b5222be423b0f0e00f578acac9034a56394dd0a2186f33e14e53ca2c8->enter($__internal_3dbc9d5b5222be423b0f0e00f578acac9034a56394dd0a2186f33e14e53ca2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3dbc9d5b5222be423b0f0e00f578acac9034a56394dd0a2186f33e14e53ca2c8->leave($__internal_3dbc9d5b5222be423b0f0e00f578acac9034a56394dd0a2186f33e14e53ca2c8_prof);

        
        $__internal_f08b14986dc8102fc3a925e738ec04fb89bf6e82ecaabe31a215d3379f5d4439->leave($__internal_f08b14986dc8102fc3a925e738ec04fb89bf6e82ecaabe31a215d3379f5d4439_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\P4\\app\\Resources\\views\\base.html.twig");
    }
}
