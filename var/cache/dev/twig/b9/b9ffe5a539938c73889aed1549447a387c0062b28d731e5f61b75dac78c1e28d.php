<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bd10c2abe5b5e1b13993b0591b40fba4991f810e60d1e52175abd1e7d94b5f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_772d873e8e414635784feacbeab6de8e075bd61ea87cf4ed2ea1141260526b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772d873e8e414635784feacbeab6de8e075bd61ea87cf4ed2ea1141260526b1f->enter($__internal_772d873e8e414635784feacbeab6de8e075bd61ea87cf4ed2ea1141260526b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c6b0a3642d4c3e31a89db044102cd5f1b6c1bb08554847974a5986d0b1063d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b0a3642d4c3e31a89db044102cd5f1b6c1bb08554847974a5986d0b1063d10->enter($__internal_c6b0a3642d4c3e31a89db044102cd5f1b6c1bb08554847974a5986d0b1063d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_772d873e8e414635784feacbeab6de8e075bd61ea87cf4ed2ea1141260526b1f->leave($__internal_772d873e8e414635784feacbeab6de8e075bd61ea87cf4ed2ea1141260526b1f_prof);

        
        $__internal_c6b0a3642d4c3e31a89db044102cd5f1b6c1bb08554847974a5986d0b1063d10->leave($__internal_c6b0a3642d4c3e31a89db044102cd5f1b6c1bb08554847974a5986d0b1063d10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7fdd8f4263fd7d20df5fa7fb0ece856bb1587994546045bdd0e1117c6104e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7fdd8f4263fd7d20df5fa7fb0ece856bb1587994546045bdd0e1117c6104e79->enter($__internal_b7fdd8f4263fd7d20df5fa7fb0ece856bb1587994546045bdd0e1117c6104e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a28c437903b76eaed611c0918ce9ca2b8388a4b5170a04ba5d63a1c997fbc20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28c437903b76eaed611c0918ce9ca2b8388a4b5170a04ba5d63a1c997fbc20c->enter($__internal_a28c437903b76eaed611c0918ce9ca2b8388a4b5170a04ba5d63a1c997fbc20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a28c437903b76eaed611c0918ce9ca2b8388a4b5170a04ba5d63a1c997fbc20c->leave($__internal_a28c437903b76eaed611c0918ce9ca2b8388a4b5170a04ba5d63a1c997fbc20c_prof);

        
        $__internal_b7fdd8f4263fd7d20df5fa7fb0ece856bb1587994546045bdd0e1117c6104e79->leave($__internal_b7fdd8f4263fd7d20df5fa7fb0ece856bb1587994546045bdd0e1117c6104e79_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e96f399531d0a5e178e234374668f0084ceebf7a55483168c0e2a9a10a7efec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96f399531d0a5e178e234374668f0084ceebf7a55483168c0e2a9a10a7efec9->enter($__internal_e96f399531d0a5e178e234374668f0084ceebf7a55483168c0e2a9a10a7efec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8512259d79f0b978c84cd75b7dcd824aead62ab0b670c1294480bcfd2dd9bbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8512259d79f0b978c84cd75b7dcd824aead62ab0b670c1294480bcfd2dd9bbee->enter($__internal_8512259d79f0b978c84cd75b7dcd824aead62ab0b670c1294480bcfd2dd9bbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_8512259d79f0b978c84cd75b7dcd824aead62ab0b670c1294480bcfd2dd9bbee->leave($__internal_8512259d79f0b978c84cd75b7dcd824aead62ab0b670c1294480bcfd2dd9bbee_prof);

        
        $__internal_e96f399531d0a5e178e234374668f0084ceebf7a55483168c0e2a9a10a7efec9->leave($__internal_e96f399531d0a5e178e234374668f0084ceebf7a55483168c0e2a9a10a7efec9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
