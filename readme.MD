# Deptrac Example

Three-level architecture testing for PHP with Deptrac.

For applications split to modules or Bounded Contexts the 
architecture tests are important on three levels:
1. **Layers** - dependencies between them;
2. **Modules** - which modules can communicate with another;
3. **Integrations** - how the integrations between modules should look like.

If you have a simple application, a microservice for example 
you probably will need just tests for Layers. There won't 
be modules and integration between.

If you are interested in more you can read more on my blog's post about it.

## How to run
Check Makefile for available task.

## Recommendations

### Why to use `--report-uncovered --fail-on-uncovered`
By default, Deptrac allow for everything, so It protects from a new layer (directory) 
which someone can add and form a new coupling also. Especially, when they forgot about 
adding Deptrac's rules for those new layers.
