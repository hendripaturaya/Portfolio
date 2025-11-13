<div class="mb-4">
  <div class="flex justify-between mb-1">
    <span class="font-medium text-gray-700">{{ $skill->name }}</span>
    <span class="text-gray-500 text-sm">{{ $skill->level }}%</span>
  </div>
  <div class="w-full bg-gray-200 rounded-full h-3">
    <div class="bg-indigo-500 h-3 rounded-full" style="width: {{ $skill->level }}%"></div>
  </div>
</div>
