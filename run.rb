require 'pp'

class Benchmark_Ruby
  def do_bench
    res = ""
    for i in 0..1000000000 do
      string =+ i
    end
    pp string
  end
end
bench = Benchmark_Ruby.new
bench.do_bench
