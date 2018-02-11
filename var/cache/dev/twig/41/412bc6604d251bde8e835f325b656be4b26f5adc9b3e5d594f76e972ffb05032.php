<?php

/* ResaBundle:Default:index.html.twig */
class __TwigTemplate_3c101615195c126d58f810f5f86ca8a03abb82478e4248bda8f9124b3a49bde6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14856f4c523f31009ec2f72a62b8a6f94c0910b763fb4f8b196e794f6bddf81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14856f4c523f31009ec2f72a62b8a6f94c0910b763fb4f8b196e794f6bddf81b->enter($__internal_14856f4c523f31009ec2f72a62b8a6f94c0910b763fb4f8b196e794f6bddf81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ResaBundle:Default:index.html.twig"));

        $__internal_f3e8018200f9804afdda206c8412ae04ca8c73451179040981d416cc8cac1146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e8018200f9804afdda206c8412ae04ca8c73451179040981d416cc8cac1146->enter($__internal_f3e8018200f9804afdda206c8412ae04ca8c73451179040981d416cc8cac1146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ResaBundle:Default:index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"..\\style.css\"/>


    </head>
    <body>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resa_homepage");
        echo "\">Louvre</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Infos pratiques</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resa_formpage");
        echo "\">Réserver une visite</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Pricing</a>
            </li>
          </ul>
        </div>
      </nav>
        <div class=\"container-fluid\">
            <header>
              <div class=\"row bandeau\">
                <div class=\"col text-center\">
                  <h1 class=\"display-1\">Musée du Louvre</h1>
                </div>
              </div>
            </header>
        </div>
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col image\">

            </div>
          </div>
        </div>

        <footer>

      </footer>
    </body>
</html>
";
        
        $__internal_14856f4c523f31009ec2f72a62b8a6f94c0910b763fb4f8b196e794f6bddf81b->leave($__internal_14856f4c523f31009ec2f72a62b8a6f94c0910b763fb4f8b196e794f6bddf81b_prof);

        
        $__internal_f3e8018200f9804afdda206c8412ae04ca8c73451179040981d416cc8cac1146->leave($__internal_f3e8018200f9804afdda206c8412ae04ca8c73451179040981d416cc8cac1146_prof);

    }

    public function getTemplateName()
    {
        return "ResaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  38 => 12,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"..\\style.css\"/>


    </head>
    <body>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"{{path('resa_homepage')}}\">Louvre</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Infos pratiques</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{path('resa_formpage')}}\">Réserver une visite</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Pricing</a>
            </li>
          </ul>
        </div>
      </nav>
        <div class=\"container-fluid\">
            <header>
              <div class=\"row bandeau\">
                <div class=\"col text-center\">
                  <h1 class=\"display-1\">Musée du Louvre</h1>
                </div>
              </div>
            </header>
        </div>
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col image\">

            </div>
          </div>
        </div>

        <footer>

      </footer>
    </body>
</html>
", "ResaBundle:Default:index.html.twig", "C:\\wamp64\\www\\P4\\src\\ResaBundle/Resources/views/Default/index.html.twig");
    }
}
