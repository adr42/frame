<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_5bea08f61c3b8aba220b1f3758452306a0ce31eec9622ea662fe6c6e2a5027e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ProductController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
   
</style>

       <div class=\"album py-5 bg-light\">
        <div class=\"container\">
     <div class=\"album py-5 bg-light\">
        <div class=\"container\">


<form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_product");
        echo "\">
    <button type=\"submit\" >Creaza Product Nou</button>
    </br>
    </br>
    </br>
</form>

    
      <div class=\"row\">

      \t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 27
            echo "        <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getImageUrl", [], "method", false, false, false, 29), "html", null, true);
            echo "\" alt=\"image cap\">
                <div class=\"card-body\">
                <p class=\"card-text\">Produs: ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                  <p class=\"card-text\">Descriere: ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">Pretul: ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33), "html", null, true);
            echo " MDL</p>
                  <p class=\"card-text\">Categoria: ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getCategory", [], "method", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>

                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href = \"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Editeaza</a></button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href = \"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"> Sterge </a> </button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
      
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
    </div>
        </div>
            </div>

    </main>

    <footer class=\"text-muted\">
      <div class=\"container\">
        <p class=\"float-right\">
          <a href=\"#\">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href=\"../../\">Visit the homepage</a> or read our <a href=\"../../getting-started/\">getting started guide</a>.</p>
      </div>
    </footer>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 49,  149 => 39,  145 => 38,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  121 => 29,  117 => 27,  113 => 26,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProductController!{% endblock %}

{% block body %}
<style>
   
</style>

       <div class=\"album py-5 bg-light\">
        <div class=\"container\">
     <div class=\"album py-5 bg-light\">
        <div class=\"container\">


<form action=\"{{path('create_product')}}\">
    <button type=\"submit\" >Creaza Product Nou</button>
    </br>
    </br>
    </br>
</form>

    
      <div class=\"row\">

      \t{% for product in products %}
        <div class=\"col-md-4\">
              <div class=\"card mb-4 shadow-sm\">
                <img class=\"card-img-top\" src=\"{{product.getImageUrl()}}\" alt=\"image cap\">
                <div class=\"card-body\">
                <p class=\"card-text\">Produs: {{product.name}}</p>
                  <p class=\"card-text\">Descriere: {{product.description}}</p>
                    <p class=\"card-text\">Pretul: {{product.price}} MDL</p>
                  <p class=\"card-text\">Categoria: {{product.getCategory().name}}</p>

                  <div class=\"d-flex justify-content-between align-items-center\">
                    <div class=\"btn-group\">
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href = \"{{path('edit_product',{id:product.id})}}\">Editeaza</a></button>
                      <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\"><a href = \"{{path('delete_product',{id:product.id})}}\"> Sterge </a> </button>
                    </div>
                    <small class=\"text-muted\">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
      
        
        {%endfor%}

    </div>
        </div>
            </div>

    </main>

    <footer class=\"text-muted\">
      <div class=\"container\">
        <p class=\"float-right\">
          <a href=\"#\">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href=\"../../\">Visit the homepage</a> or read our <a href=\"../../getting-started/\">getting started guide</a>.</p>
      </div>
    </footer>


{% endblock %}
", "index.html.twig", "C:\\Users\\User\\Desktop\\Adrian Individual\\quick_tour\\templates\\index.html.twig");
    }
}
