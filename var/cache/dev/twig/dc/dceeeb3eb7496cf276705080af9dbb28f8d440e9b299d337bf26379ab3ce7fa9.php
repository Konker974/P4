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
        $__internal_600d9ebe0894001deddc061b749060acc230c0afd60bec2b34e24a6a177da9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600d9ebe0894001deddc061b749060acc230c0afd60bec2b34e24a6a177da9a9->enter($__internal_600d9ebe0894001deddc061b749060acc230c0afd60bec2b34e24a6a177da9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_af9655a24ac19c127f81ccaa85c54790e4e164c27983246e5ceea012f9c5b745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9655a24ac19c127f81ccaa85c54790e4e164c27983246e5ceea012f9c5b745->enter($__internal_af9655a24ac19c127f81ccaa85c54790e4e164c27983246e5ceea012f9c5b745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_600d9ebe0894001deddc061b749060acc230c0afd60bec2b34e24a6a177da9a9->leave($__internal_600d9ebe0894001deddc061b749060acc230c0afd60bec2b34e24a6a177da9a9_prof);

        
        $__internal_af9655a24ac19c127f81ccaa85c54790e4e164c27983246e5ceea012f9c5b745->leave($__internal_af9655a24ac19c127f81ccaa85c54790e4e164c27983246e5ceea012f9c5b745_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6160f5f9b48b2d274fdf5fbe5015a9474446640f2f8bb9057f318a779001ecd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6160f5f9b48b2d274fdf5fbe5015a9474446640f2f8bb9057f318a779001ecd3->enter($__internal_6160f5f9b48b2d274fdf5fbe5015a9474446640f2f8bb9057f318a779001ecd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a1ff3b93f2deec72986636b700e22ecbb9c101f0153d3638ee5bf891af28302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1ff3b93f2deec72986636b700e22ecbb9c101f0153d3638ee5bf891af28302->enter($__internal_5a1ff3b93f2deec72986636b700e22ecbb9c101f0153d3638ee5bf891af28302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5a1ff3b93f2deec72986636b700e22ecbb9c101f0153d3638ee5bf891af28302->leave($__internal_5a1ff3b93f2deec72986636b700e22ecbb9c101f0153d3638ee5bf891af28302_prof);

        
        $__internal_6160f5f9b48b2d274fdf5fbe5015a9474446640f2f8bb9057f318a779001ecd3->leave($__internal_6160f5f9b48b2d274fdf5fbe5015a9474446640f2f8bb9057f318a779001ecd3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2753753fc63224af12568e8f36294793777e13f433cecb7986ec5ea0a2ebbc3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2753753fc63224af12568e8f36294793777e13f433cecb7986ec5ea0a2ebbc3b->enter($__internal_2753753fc63224af12568e8f36294793777e13f433cecb7986ec5ea0a2ebbc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2af13b362c24ec013bf2c78301fade0bc2eee376c86e4f7e1da750b95324080c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af13b362c24ec013bf2c78301fade0bc2eee376c86e4f7e1da750b95324080c->enter($__internal_2af13b362c24ec013bf2c78301fade0bc2eee376c86e4f7e1da750b95324080c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2af13b362c24ec013bf2c78301fade0bc2eee376c86e4f7e1da750b95324080c->leave($__internal_2af13b362c24ec013bf2c78301fade0bc2eee376c86e4f7e1da750b95324080c_prof);

        
        $__internal_2753753fc63224af12568e8f36294793777e13f433cecb7986ec5ea0a2ebbc3b->leave($__internal_2753753fc63224af12568e8f36294793777e13f433cecb7986ec5ea0a2ebbc3b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef6d7652c1c0cdbf0d59122c5655c448aa3fcb7a5289a15c4d94f9626f2d4f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6d7652c1c0cdbf0d59122c5655c448aa3fcb7a5289a15c4d94f9626f2d4f87->enter($__internal_ef6d7652c1c0cdbf0d59122c5655c448aa3fcb7a5289a15c4d94f9626f2d4f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30befb95ea8666a5a5f75e7792c471b998476f25552ef7fb24aaa41af7543094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30befb95ea8666a5a5f75e7792c471b998476f25552ef7fb24aaa41af7543094->enter($__internal_30befb95ea8666a5a5f75e7792c471b998476f25552ef7fb24aaa41af7543094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30befb95ea8666a5a5f75e7792c471b998476f25552ef7fb24aaa41af7543094->leave($__internal_30befb95ea8666a5a5f75e7792c471b998476f25552ef7fb24aaa41af7543094_prof);

        
        $__internal_ef6d7652c1c0cdbf0d59122c5655c448aa3fcb7a5289a15c4d94f9626f2d4f87->leave($__internal_ef6d7652c1c0cdbf0d59122c5655c448aa3fcb7a5289a15c4d94f9626f2d4f87_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fa077d04e17f0aec5cbc92546257346d5a31893d7ec2bf688466622632734df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa077d04e17f0aec5cbc92546257346d5a31893d7ec2bf688466622632734df->enter($__internal_4fa077d04e17f0aec5cbc92546257346d5a31893d7ec2bf688466622632734df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_974a9361294cfbdff623144e764fcc4bb03a040dcd2aef7436e69ce21fb40314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974a9361294cfbdff623144e764fcc4bb03a040dcd2aef7436e69ce21fb40314->enter($__internal_974a9361294cfbdff623144e764fcc4bb03a040dcd2aef7436e69ce21fb40314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_974a9361294cfbdff623144e764fcc4bb03a040dcd2aef7436e69ce21fb40314->leave($__internal_974a9361294cfbdff623144e764fcc4bb03a040dcd2aef7436e69ce21fb40314_prof);

        
        $__internal_4fa077d04e17f0aec5cbc92546257346d5a31893d7ec2bf688466622632734df->leave($__internal_4fa077d04e17f0aec5cbc92546257346d5a31893d7ec2bf688466622632734df_prof);

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
